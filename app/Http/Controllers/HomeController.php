<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // __invoke cuando el controlador queremos que solo administre una ruta
    public function index()
    {
        return view('home');
    }
}
