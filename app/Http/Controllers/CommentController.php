<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

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
        return view('admin_comments');
    }
}
