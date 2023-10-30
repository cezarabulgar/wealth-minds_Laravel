<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function homepage(){
        return view('welcome');
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }

    function courses(){
        return view('courses');
    }

    function financialBasics(){
        return view('financialbasics');
    }

    function educationalResources(){
        return view('educational-resources');
    }
    
    function webinarsWorkshops(){
        return view ('webinars-workshops');
    }
}
