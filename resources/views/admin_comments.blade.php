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

    <div class="container p-5 ">
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

   
    <div class=" bg-white ">
        <div class="container">
            <form action="{{ route('admin_comments.store') }}" method="POST" class="row g-3">
            <h2 class="text-center">Añade tu comentario</h2>
                <div class="col-12">
                    <div class="form-floating">
                        <!--sempre haurem de ficar aquesta directiva en els formularis de laravel
                            per a que ens envii un token ocult-->
                        @csrf
                        <textarea type="text" name="comment" style="height: 100px" class="form-control" placeholder="Leave a comment here"
                                value={{ old('comment', $comment->comment) }}></textarea>
                                <label for="floatingTextarea2">Comments</label>
                        @error('comment')
                            <br>
                            <small> *{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-12 text-center mb-5">
                    <button class="btn btn-danger mt-4" type="submit">Añadir</button>
                </div>
            </form>
        </div>
    </div>
@endsection
