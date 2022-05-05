@extends('layouts.app')
@section('content')

    <div id="titulo" class="container-flex p-3" style="background-color: #F28627;">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-dark display-1">Ranking</h1>
            </div>
        </div>
    </div>

    <div class="container-flex p-5">
        <h2 class="text-center display-2 text-white">¡Jugadores con más partidas ganadas!</h2>
        <table class="table table-hover table-borderless table-striped" style="background-color: #F28627;">
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
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{$position->avatar}}</td>
                    <td>{{$position->nickname}}</td>
                    <td>{{$position->victories}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
    
@endsection
