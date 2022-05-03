@extends('layouts.app')
@section('content')
<div class="bg-warning">
    <div class="text-white text-center">
        <h1 class="text-dark display-1 p-5 mb-5">Comments</h1>
    </div>
</div>



<div class="container text-white mt-5">
    <div class="rounded">
        <div class="owl-carousel owl-theme text-dark">
            @foreach ($comments as $comment)
            <div class="owl-item">
                <div class="card">
                    <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                        <img src="{{ $comment->avatar }}" class="card-img-top img-cover"
                            alt="Raeesh">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $comment->nickname }}</h5>
                        <p class="card-text">{{ $comment->comment }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@if (Auth::user())
<div class="bg-white">
    <div>
        <h2 class="text-center mt-5 pt-5">Añade tu comentario</h2>
        <div class="container">
            <form class="row g-3">
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px" [(ngModel)]="newComment.comment" #comment="ngModel" id="comment" name="comment"></textarea>
                        <label for="floatingTextarea2">Comments</label>
                    </div>
                </div>
                <div class="col-12 text-center mb-5">
                    <button type="submit" class="btn btn-danger mt-4" (click)="addNewComment()">Añadir</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

@endsection