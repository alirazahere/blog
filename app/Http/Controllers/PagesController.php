<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected function home(){
        return view('pages.welcome');
    }
    protected function about(){
        return view('pages.about');
    }
    protected function contact(){
        return view('pages.contact');
    }
}
