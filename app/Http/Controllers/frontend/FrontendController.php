<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about_us(){
        return view('frontend.about_us');
    }

    public function condo_apartments(){
        return view('frontend.condo_apartments');
    }

    public function builders(){
        return view('frontend.builders');
    }

    public function services(){
        return view('frontend.services');
    }

    public function listing(){
        return view('frontend.listing');
    }

    public function contact_us(){
        return view('frontend.contact_us');
    }
}
