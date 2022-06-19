<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function getservice(){
        return view('service');
    }

    public function getabout(){
        return view('about');
    }

    public function getgallery(){
        return view('gallery');
    }

    public function getcontact(){
        return view('contact');
    }


}






