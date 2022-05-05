<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participation;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function show()
    {
        $ranking = User::join('participations', 'users.id', '=', 'participations.idJ')
        ->selectRaw('nickname, avatar, count(*) as victories')
        ->where('participations.position', '=', 1)
        ->groupBy('id', 'nickname', 'avatar')
        ->orderBy('victories', 'desc')
        ->get();

        return view('ranking', compact('ranking'));
    }
}
