<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;

class RankingController extends Controller
{
    public function show()
    {
        $ranking = Participation::join('users', 'users.id','=', 'participations.idJ')
        // ->select(DB::raw('count(*) as victoires, participations.position'))
        ->where('participations.position','=', 1)
                ->get(['users.nickname', 'participations.*']);
        

        foreach ($ranking as $value) {
           echo $value;
        }
        // https://laravel.com/docs/9.x/queries#grouping

        return view('ranking');
    }

    // public function show(){
    //     //agafa dades del model de player
    //     //agafa dades del model de participation
    //     //fa el join per treure la taula ranking
    // }
}
