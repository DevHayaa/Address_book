<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function show()
    {
        return view('category.showcategory');
    }
}


