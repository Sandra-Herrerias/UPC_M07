<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function show()
    {
        //retorna les victories agrupades
        $ranking = Participation::join('users', 'users.id', '=', 'participations.idJ')
            ->where('participations.position', '=', 1)
            ->orderBy('victories', 'desc')
            ->groupBy('users.id')
            ->select(DB::raw('count(participations.position) as victories,users.id'))
            ->get();

/*
        //retorna tota la info dels guanyadors
    $ranking = Participation::join('users', 'users.id','=', 'participations.idJ')
        // ->select(DB::raw('count(*) as victories, participations.position'))
        ->where('participations.position','=', 1)
                ->get(['users.nickname', 'participations.*']);*/

        foreach ($ranking as $value) {
            echo "FULL ARRAY: ";
            echo $value;
            echo "<br>";
            echo "nickname:";
            echo $value->id;
            echo "victories:";
            echo $value->victories;
            echo "<br>";
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
