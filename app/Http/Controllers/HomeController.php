<?php

namespace App\Http\Controllers;

use DrewM\MailChimp\MailChimp;
use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;
use Spatie\Newsletter\NewsletterListCollection;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function subscribe(Request $request){
        $request->validate([
            'mail'=>'required|email'
        ]);
        $mailChimp = new MailChimp(env('MAILCHIMP_APIKEY'));
        $lista = NewsletterListCollection::createFromConfig(config('newsletter'));
        $newsletter = new Newsletter($mailChimp,$lista);
        try{
            if($newsletter->isSubscribed($request->mail)) {
                return redirect()->back()->with('error','Email je vec registrovan');
            }else{
                $newsletter->subscribe($request->mail);
                return redirect()->back()->with('success','Email je uspesno registrovan');
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
