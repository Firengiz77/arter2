<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Models\Languages;

Route::get('login/{lang?}', function () {

    $lang = 'en';
    return view('auth.login', compact('lang'));


})->name('login');
require __DIR__ . '/auth.php';

Route::get('change-language/{lang}/{route?}/{slug?}', [LanguageController::class, 'changeLanquage'])->name('language');


foreach(Languages::all() as $lang){
    
   Route::get('/', [FrontendController::class, 'index'])->name('index')->middleware(['XSS']);
   Route::get('/'.__('route.contact',[],$lang->code), [FrontendController::class, 'contact'])->name(__($lang->code).'.contact')->middleware(['XSS']);
   Route::get('/'.__('route.about',[],$lang->code), [FrontendController::class, 'about'])->name(__($lang->code).'.about')->middleware(['XSS']);
   Route::get('/'.__('route.blogs',[],$lang->code), [FrontendController::class, 'blogs'])->name(__($lang->code).'.blogs')->middleware(['XSS']);
   Route::get('/'.__('route.blog',[],$lang->code).'/{slug}', [FrontendController::class, 'blog_single'])->name(__($lang->code).'.blog')->middleware(['XSS']);
   Route::get('/'.__('route.service',[],$lang->code), [FrontendController::class, 'service'])->name(__($lang->code).'.service')->middleware(['XSS']);
   Route::get('/'.__('route.service_single',[],$lang->code).'/{slug}', [FrontendController::class, 'service_single'])->name(__($lang->code).'.service_single')->middleware(['XSS']);

}