<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComment;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comments()
    {
        $comments = Comment::join('users', 'users.id', '=', 'comments.id_player')->limit(10)
            ->get(['users.nickname', 'users.avatar', 'comments.comment']);

        return view('comments', compact('comments'));
    }

    public function admin_comments()
    {
        $admin_comments = Comment::join('users', 'users.id', '=', 'comments.id_player')
            ->get(['users.nickname', 'users.email', 'users.avatar', 'comments.id', 'comments.comment']);
        return view('admin_comments', compact('admin_comments'));
    }

    public function destroy(Comment $comment)
    {
        echo $comment;
        $comment->delete();
        //amb el id passat per parametre recupero el comentari sencer
        //select * from comentaris whre id = $id
        //$comment = Comment::destroy($id);
        return redirect()->route('admin_comments');
    }


    //metode del controlador que em guarda
    public function store(StoreComment $request)
    {
        //$comment = Comment::create($request->all()->);
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->id_player=Auth::user()->id;
        $comment->save();
        return redirect()->route('admin_comments', $comment);
    }
}
