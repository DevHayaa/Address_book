<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JewelleryController extends Controller
{
    public function anklets()
    {
        return view('categories.jewellery.anklets');
    }
    public function bangles()
    {
        return view('categories.jewellery.bangles');
    }
    public function rings()
    {
        return view('categories.jewellery.rings');
    }
    public function earRings()
    {
        return view('categories.jewellery.earRings');
    }
    public function necklace()
    {
        return view('categories.jewellery.nacklace');
    }
}
