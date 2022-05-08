@extends('layouts.app')
@section('content')


<div id="titulo" class="container-flex p-5" style="background-color: #F28627;">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-dark display-1">Ranking</h1>
        </div>
    </div>
</div>

<div class="container p-5">
    <h2 class="text-center display-4 text-white">¡Jugadores con más partidas ganadas!</h2>
    <table class="table table-hover table-borderless table-striped text-center" style="background-color: #F28627;">
        <thead style="background-color: #c22222;">
            <tr>
                <th scope="col">Ranking</th>
                <th scope="col">Avatar</th>
                <th scope="col">Jugador</th>
                <th scope="col">Victorias</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ranking as $position)
            <tr>
                <th scope="row">{{ ($ranking->currentPage() -1 ) *  $ranking->perPage() + $loop->index + 1}}</th>
                <td class="w-25"> <img src="{{$position->avatar}}" class="rounded-circle" width="75" height="75"></td>
                <td>{{$position->nickname}}</td>
                <td>{{$position->victories}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="col-sm-12 d-flex justify-content-end">
        {{$ranking->links()}}
    </div>




</div>

@endsection