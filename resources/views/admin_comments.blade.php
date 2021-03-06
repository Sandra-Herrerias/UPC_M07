@extends('layouts.app')
@section('content')
<div id="titulo" class="container-flex p-3" style="background-color: #F28627;">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-dark display-1">CRUD Comentarios</h1>
        </div>
    </div>
</div>

<!-- COMMENTS LIST -->
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
                <td>
                    <form action="{{ route('admin_comments.find_comment', $comment->id) }}" method="POST">
                        @csrf
                        @method('post')
                        <button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                    </form>

                </td>
                <td>
                    <!-- <form action="{{ route('admin_comments.destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                </form> -->
                    <form action="{{ route('admin_comments.destroy', $comment->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill" onclick="return confirm('Are you sure you want to delete this item?');"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="col-sm-12 d-flex justify-content-end">
        {{ $admin_comments->links() }}
    </div>
</div>

<!-- ADD COMMENTS -->
<div class="bg-white">
    <div class="container">
        <form action="{{ route('admin_comments.store') }}" method="POST" class="row g-3">
            <h2 class="text-center mt-5">A??ade tu comentario</h2>
            <div class="col-12">
                <div class="form-floating">
                    <!--sempre haurem de ficar aquesta directiva en els formularis de laravel
                                per a que ens envii un token ocult-->
                    @csrf
                    <textarea type="text" name="comment" style="height: 120px" class="form-control" placeholder="Leave a comment here" value={{ old('comment', $comment->comment) }}></textarea>
                    <label for="floatingTextarea2">Comments</label>
                    @error('comment')
                    <br>
                    <small> *{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-12 text-center mb-5">
                <button class="btn btn-warning mt-4" type="submit">A??adir</button>
            </div>
        </form>
    </div>
</div>

<!-- MODIFY COMMENTS -->
<div class="bg-white ">
    @isset($comment_selected)
    <div class="container">
        <form action="{{ route('admin_comments.update', $comment_selected) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <h2 class="text-center mt-5">Modificar comentario</h2>
            <div class="col-12">
                <div class="form-group">
                    <label for="idLabel" class="control-label">ID: {{ $comment_selected->id }}<br>
                </div>
                @csrf
                <div class="form-group">
                    <label for="colorLabel" class="control-label">Modificar comentario*</label><br>
                    <textarea class="form-control" type="text" id="commentText" name="commentText" value={{ $comment_selected->comment }}>
                    {{ $comment_selected->comment }}
                    </textarea>
                </div><br>
            </div>
            <div class="col-12 text-center mb-5">
                <button class="btn btn-warning" type="submit">Modificar</button>
            </div>
        </form>
    </div>
</div>
<div class="bg-white ">
    @endisset
</div>



@endsection