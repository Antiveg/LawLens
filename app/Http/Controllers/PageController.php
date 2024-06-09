<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function viewRegister(){
        return view('register', [
            'title' => "Register"
        ]);
    }

    public function viewLogin(){
        return view('login', [
            'title' => "Login"
        ]);
    }

    public function viewProfile(){
        return view('profile', [
            'title' => "Profile"
        ]);
    }

    public function viewHome(){
        return view('home', [
            'title' => "Home"
        ]);
    }

    public function viewService(){
        return view('service', [
            'title' => "Service"
        ]);
    }

    public function viewNews(){
        return view('news', [
            'title' => "News"
        ]);
    }

    public function viewAboutUs(){
        return view('about-us', [
            'title' => "About Us"
        ]);
    }

    public function viewLawLibrary(){
        return view('law-library', [
            'title' => "Law Library"
        ]);
    }

    public function viewServicePayment(){
        return view('service-payment', [
            'title' => "Payment"
        ]);
    }

    public function viewServiceChat(){
        return view('service-chat', [
            'title' => "Chat"
        ]);
    }

    public function viewServiceReview(){
        return view('service-review', [
            'title' => "Review"
        ]);
    }
}
