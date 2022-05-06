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
        // return  $comments;
    }

    public function admin_comments()
    {
        $admin_comments = Comment::join('users', 'users.id', '=', 'comments.id_player')
        ->select('users.nickname', 'users.email',  'comments.id', 'comments.comment')
            ->paginate(11);
            // ->get(['users.nickname', 'users.email', 'users.avatar', 'comments.id', 'comments.comment']);

        return view('admin_comments', compact('admin_comments'));
        // return  $admin_comments;
    }

    public function destroy($id)
    {
        // echo $comment;
        // $comment->delete();
        // //amb el id passat per parametre recupero el comentari sencer
        // //select * from comentaris whre id = $id
        // //$comment = Comment::destroy($id);
        // return redirect()->route('admin_comments');
        $comment2= Comment::find($id);

        $comment2->delete();

        return $comment2;
        // Comment::destroy($comment);

    }


    //metode del controlador que em guarda
    public function store(StoreComment $request)
    {
        //$comment = Comment::create($request->all()->);
        $comment = new Comment;
        $comment->comment = $request->comment;
        // $comment->nickname = Auth::user()->nickname;
        $comment->id_player=Auth::user()->id;
        $comment->save();
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin_comments', $comment);
        }else{
            return redirect()->route('comments', $comment);
        }
        
    }
    

    public function update(Request $request){

        $comment = Comment::find($request->id);
        $comment->comment = $request->comment;
        $comment->save();
        return  $comment;
    }

    public function find_comment(Request $comment)  {
        $admin_comments = Comment::join('users', 'users.id', '=', 'comments.id_player')
        ->select('users.nickname', 'users.email',  'comments.id', 'comments.comment')
            ->paginate(11);

        $comment_selected = Comment::find($comment->id);
        
        return $comment_selected;
        // return view('admin_comments', compact('admin_comments', 'comment_selected'));
        // return view('admin_comments', compact( 'comment_selected'));
    }

}
