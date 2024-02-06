<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfectioneryShopController extends Controller
{
    //
    public function index(){
        return view('accueil');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function product(){
        return view('product');
    }
    public function service(){
        return view('service');
    }
    public function team(){
        return view('team');
    }
    public function testimonial(){
        return view('testimonial');
    }

    public function contactForm(Request $request){
            return view('contact', ['data' => $request]);
    }
}
