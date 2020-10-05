<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function homePage(){
        return view('web.web');
    }

    public function about(){
        return view('web.about');
    }

    public function store(){
        return view('web.store');
    }

    public function service(){
        return view('web.service');
    }

    public function contact(){
        return view('web.contact');
    }

    public function privacy(){
        return view('web.privacy');
    }

    public function delivery(){
        return view('web.delivery');
    }

    public function product(){
        return view('web.product');
    }

    public function return(){
        return view('web.return');
    }
}
