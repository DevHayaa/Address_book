<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('staticPage.about');
    }
    public function contact()
    {
        return view('staticPage.contact');
    }
}
