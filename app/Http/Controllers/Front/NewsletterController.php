<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscribers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class NewsletterController extends Controller
{
    public function addSubscriber(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $subscriberCount = NewsletterSubscribers::where('email', $data['subscriber_email'])->count();
            if($subscriberCount>0){
                return "exists";
            }else{
                // Add Newsletter email in newsletter_subscribers table
                $newsletter = new NewsletterSubscribers;
                $newsletter->email = $data['subscriber_email'];
                $newsletter->status = 1;
                $newsletter->save();
                return "inserted";
            }
        }
    }
}
