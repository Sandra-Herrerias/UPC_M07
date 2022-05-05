@extends('layouts.app')
@section('content')
    <h1>admin comments</h1>


    <div id="third">This is the THIRD div</div>
    <button id="toggle">Hide THIRD div</button>

    <script>
        const targetDiv = document.getElementById("third");
        const btn = document.getElementById("toggle");
        btn.onclick = function() {
            if (targetDiv.style.display !== "none") {
                targetDiv.style.display = "none";
            } else {
                targetDiv.style.display = "block";
            }
        };
    </script>


    <div id="titulo" class="container-flex p-3" style="background-color: #F28627;">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-dark display-1">CRUD Comentarios</h1>
            </div>
        </div>
    </div>

    <div class="container-flex p-5">
        <table class="table table-hover table-borderless table-striped" style="background-color: #F28627;">
            <thead style="background-color: #c22222;">
                <tr>
                    <th scope="col">USUARIO</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">COMENTARIO</th>
                    <th scope="col">MODIFICAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admin_comments as $comment)
                    <tr>
                        <th scope="row">{{ $comment->nickname }}</th>
                        <td>{{ $comment->email }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td><button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></td>
                        <td>
                                    <form action="{{ route('admin_comments.destroy', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
