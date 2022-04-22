<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
  
    public function admin_comments()
    {
        return view('admin_comments');
    }

    public function comments_feedback()
    {
        return view('comments_feedback');
    }
}
