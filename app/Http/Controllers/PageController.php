<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function aboutMe(){
        return view('about-me');
    }

    function myHobby(){
        return view('my-hobby');
    }

    function contactMe(){
        return view('contact-me');
    }
}
