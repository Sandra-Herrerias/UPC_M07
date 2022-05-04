<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function ranking()
    {
        return view('ranking');
    }

    public function show(){
        //agafa dades del model de player
        //agafa dades del model de participation
        //fa el join per treure la taula ranking
    }
}
