<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\About;
use App\Models\Service;
use App\Models\Counter;
use App\Models\AboutDetail;
use App\Models\HowItWork;
use App\Models\Customer;
use App\Models\Partner;
use App\Models\Faq;
use App\Models\Contact;

class FrontendController extends Controller
{


    public function index(){
        return view('front.pages.index');
    }

    public function about(){
        $about = About::first();
        $counter = Counter::get();
        $detail = AboutDetail::get();
        $works = HowItWork::get();
        $customer = Customer::get();
        $partners = Partner::get();
        $faq = Faq::get();
        return view('front.pages.about',compact('about','counter','detail','works','customer','partners','faq'));
    }

    public function contact(){
        $contact = Contact::get();
        return view('front.pages.contact',compact('contact'));
    }

    public function blogs(){
        $blogs = Blog::paginate(1);
        return view('front.pages.blogs',compact('blogs'));
    }

    public function blog_single($slug){
   
        $blog = Blog::where('slug->'.app()->getLocale(),$slug)->first();
        $blogs = Blog::take(9)->get();
      
        return view('front.pages.blog_single',compact('blog','blogs'));
    }

    public function services(){
        $services = Service::paginate(1);
        return view('front.pages.services',compact('services'));
    }

    public function service_single($slug){
        $service = Service::where('slug->'.app()->getLocale(),$slug)->first();
        return view('front.pages.service_single',compact('service'));
    }




    


public function search(Request $request){
 
    $q = $request->q;
    $service = Service::where('title','like' ,'%'.$q.'%')->first();

    if($service){
        return view('front.pages.service_single',compact('service'));
    }else{
        return redirect()->back()->with('error', __('ERROR!') );
    }

}



    public function contact_send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required',
        ]);
        $dArr = [
            '{form_name}' => $request->name,
            '{form_email}' => $request->email,
            '{form_message}' => $request->message,
            '{form_phone}' => $request->phone,
        ];
        $resp = Utility::sendEmailTemplate('Contact', 'aga.mustafayevvv@gmail.com', $dArr);
        return redirect()->back()->with('success', __('Page Successfully added!') );

    }


    




    public function subscription(Request $request){
        $subs = new Subscription();
        $subs->email = $request->email;
        $subs->save();

        return redirect()->back()->with('success', __('Successfully Subscription') );
    }



    public function contactForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'desc' => 'required',

        ]);

        $subscription = new ContactForm();
        $subscription->email      = $request->email;
        $subscription->desc      = $request->desc;
        $subscription->name      = $request->name;
        $subscription->subject      = $request->subject;
        $subscription->save();

        return redirect()->back()->with('success', __('Mesajınız uğurla göndərildi') );
    }

}
