<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloworld extends Controller
{
    function show(){
        return view('aboutus');
    }

    function show1(){
        return view('home');

    }
    function show2(){
        return view('contactus');
    }
   
}

