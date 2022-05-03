<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // echo (Auth::user)
        return view('index');
    }

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
