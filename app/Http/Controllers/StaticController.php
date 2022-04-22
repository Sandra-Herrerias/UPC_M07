<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{

    public function aboutgame()
    {
        return view('aboutgame');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function download()
    {
        return view('download');
    }

    public function technologies()
    {
        return view('technologies');
    }

}
