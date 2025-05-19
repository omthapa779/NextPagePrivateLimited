<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('Pages.about');
    }
    public function Services(){
        return view('Pages.Services');
    }
    public function FAQ(){
        return view('Pages.FAQ_Page');
    }
    public function Contact(){
        return view('Pages.Contact');
    }
}
