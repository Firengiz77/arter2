<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplateLang;
use App\Models\Store;
use App\Models\User;
use App\Models\Utility;
use App\Models\Languages;
use Auth;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanquage($lang,$route=null,$slug=null)
    {

        app()->setLocale($lang);
        session()->put('locale', $lang);
       if(\Auth::user()){
        $user       = Auth::user();
        $user->lang = $lang;
        $user->save();
        if($user->lang == 'ar' || $user->lang =='he'){
            $value = 'on';
        }
        else{
            $value = 'off';
        }
            \DB::insert(
                'insert into settings (`value`, `name`,`created_by`) values (?, ?, ?) ON DUPLICATE KEY UPDATE `value` = VALUES(`value`) ', [
                    $value,
                    'SITE_RTL',
                    $user->creatorId(),
                ]
            );
       }

   
       if($route == 'index'){
        return redirect()->back()->with('success', __('Language change successfully.'));
       }

       if($slug){
        $routeName = app()->getLocale() . '.' . explode('.', $route)[1];
        return redirect()->route($routeName, $slug);
       }

       
       return redirect(route(app()->getLocale().'.'.explode('.', $route)[1]));
       // return redirect()->back()->with('success', __('Language change successfully.'));
    }

    public function manageLanguage($currantLang)
    {
            if(\Auth::user()->type == 1)
            {
                $languages = Languages::pluck('fullName','code');
                $settings = \App\Models\Utility::settings();
                if(!empty($settings['disable_lang'])){
                    $disabledLang = explode(',',$settings['disable_lang']);
                }
                else{
                    $disabledLang = [];
                }
                $dir = base_path() . '/resources/lang/' . $currantLang;
                if(!is_dir($dir))
                {
                    $dir = base_path() . '/resources/lang/en';
                }
                $arrLabel   = json_decode(file_get_contents($dir . '.json'));
                $arrFiles   = array_diff(
                    scandir($dir), array(
                                     '..',
                                     '.',
                                 )
                );
                $arrMessage = [];

                foreach($arrFiles as $file)
                {
                    $fileName = basename($file, ".php");
                    $fileData = $myArray = include $dir . "/" . $file;
                    if(is_array($fileData))
                    {
                        $arrMessage[$fileName] = $fileData;
                    }
                }



                return view('lang.index', compact('languages', 'currantLang', 'arrLabel', 'arrMessage','disabledLang','settings'));
            }
            else
            {
                return redirect()->back()->with('error', __('Permission denied.'));
            }


    }

    public function storeLanguageData(Request $request, $currantLang)
    {
            if(\Auth::user()->type == 1)
            {
                $Filesystem = new Filesystem();
                $dir        = base_path() . '/resources/lang/';
                if(!is_dir($dir))
                {
                    mkdir($dir);
                    chmod($dir, 0777);
                }
                $jsonFile = $dir . "/" . $currantLang . ".json";

                if(isset($request->label) && !empty($request->label))
                {
                    file_put_contents($jsonFile, json_encode($request->label));
                }

                $langFolder = $dir . "/" . $currantLang;

                if(!is_dir($langFolder))
                {
                    mkdir($langFolder);
                    chmod($langFolder, 0777);
                }
                if(isset($request->message) && !empty($request->message))
                {
                    foreach($request->message as $fileName => $fileData)
                    {
                        $content = "<?php return [";
                        $content .= $this->buildArray($fileData);
                        $content .= "];";
                        file_put_contents($langFolder . "/" . $fileName . '.php', $content);
                    }
                }

                return redirect()->route('manage.language', [$currantLang])->with('success', __('Language save successfully.'));
            }
            else
            {
                return redirect()->back()->with('error', __('Permission denied.'));
            }


    }

    public function buildArray($fileData)
    {
        $content = "";
        foreach($fileData as $lable => $data)
        {
            if(is_array($data))
            {
                $content .= "'$lable'=>[" . $this->buildArray($data) . "],";
            }
            else
            {
                $content .= "'$lable'=>'" . addslashes($data) . "',";
            }
        }

        return $content;
    }

    public function createLanguage()
    {
        return view('lang.create');
    }

    public function storeLanguage(Request $request)
    {
            if(\Auth::user()->type == 1)
            {
                $languageExist = Languages::where('code',$request->code)->orWhere('fullName',$request->fullname)->first();
                if(empty($languageExist)){
                    $language = new Languages();
                    $language->code = strtolower($request->code);
                    $language->fullName = ucFirst($request->fullname);
                    $language->save();

                    $Filesystem = new Filesystem();
                    $langCode   = strtolower($request->code);
                    $langDir    = base_path() . '/resources/lang/';
                    $dir        = $langDir;
                    if(!is_dir($dir))
                    {
                        mkdir($dir);
                        chmod($dir, 0777);
                    }
                    $dir      = $dir . '/' . $langCode;
                    $jsonFile = $dir . ".json";
                    \File::copy($langDir . 'en.json', $jsonFile);

                    if(!is_dir($dir))
                    {
                        mkdir($dir);
                        chmod($dir, 0777);
                    }
                    $Filesystem->copyDirectory($langDir . "en", $dir . "/");

                    Utility::emailTemplateLang($langCode);

                    return redirect()->route('manage.language', [$langCode])->with('success', __('Language successfully created.'));
                }
                else{
                    return redirect()->back()->with('error', __('Language Already Exist!'));
                }
            }
            else
            {
                return redirect()->back()->with('error', __('Permission denied.'));
            }

    }

    public function destroyLang($lang)
    {
            if(\Auth::user()->type == 1)
            {
                $settings = \App\Models\Utility::settings();
                $default_lang = $settings['default_language'];
                $langDir      = base_path() . '/resources/lang/';
                if(is_dir($langDir))
                {
                    // remove directory and file
                    Utility::delete_directory($langDir . $lang);
                    unlink($langDir . $lang . '.json');
                    // update user that has assign deleted language.
                    User::where('lang', 'LIKE', $lang)->update(['lang' => $default_lang]);
                }
                Languages::where('code',$lang)->first()->delete();

                EmailTemplateLang::where('lang', $lang)->delete();

                return redirect()->route('manage.language', $default_lang)->with('success', __('Language Deleted Successfully.'));
            }
            else
            {
                return redirect()->back()->with('error', __('Permission denied.'));
            }


    }

    public function changeLanquageStore($slug,$lang)
    {

        session(['lang' => $lang]);


        return redirect()->back()->with('success', __('Language change successfully.'));
    }
    public function disableLang(Request $request){
        if(\Auth::user()->type == 1){
            $settings = Utility::settings();
            $disablelang  = '';
            if($request->mode == 'off'){
                if(!empty($settings['disable_lang'])){
                    $disablelang = $settings['disable_lang'];
                    $disablelang=$disablelang.','. $request->lang;
                }
                else{
                    $disablelang = $request->lang;
                }
                \DB::insert(
                    'insert into settings (`value`, `name`,`created_by`,`store_id`) values (?, ?, ?, ?) ON DUPLICATE KEY UPDATE `value` = VALUES(`value`) ', [
                        $disablelang,
                        'disable_lang',
                        \Auth::user()->creatorId(),
                        '0',
                    ]
                );
                $data['message'] = __('Language Disabled Successfully');
                $data['status'] = 200;
                return $data;
            }
            else{
                $disablelang = $settings['disable_lang'];
                $parts = explode(',', $disablelang);
                while(($i = array_search($request->lang,$parts)) !== false) {
                    unset($parts[$i]);
                }
                \DB::insert(
                    'insert into settings (`value`, `name`,`created_by`,`store_id`) values (?, ?, ?, ?) ON DUPLICATE KEY UPDATE `value` = VALUES(`value`) ', [
                        implode(',', $parts),
                        'disable_lang',
                        \Auth::user()->creatorId(),
                        '0',
                    ]
                );
                $data['message'] = __('Language Enabled Successfully');
                $data['status'] = 200;
                return $data;
            }
        }
    }
}
