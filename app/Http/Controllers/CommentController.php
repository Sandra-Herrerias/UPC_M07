<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comments()
    {
        return view('comments');
    }

    public function admin_comments()
    {
        return view('admin_comments');
    }
}
