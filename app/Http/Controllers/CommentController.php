<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComment;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Validator;

class CommentController extends Controller
{
    public function comments()
    {
        $comments = Comment::join('users', 'users.id', '=', 'comments.id_player')->limit(10)
            ->get(['users.nickname', 'users.avatar', 'comments.comment']);

        if ($comments) {
            return response()->json(['success' => true, 'comments' => $comments]);
        }
        // return view('comments', compact('comments'));
        return response()->json(['success' => false]);
    }

    public function admin_comments()
    {
        $admin_comments = Comment::join('users', 'users.id', '=', 'comments.id_player')
            ->select('users.nickname', 'users.email',  'comments.id', 'comments.comment')
            // ->paginate(11);
            ->get();

        if ($admin_comments) {
            return response()->json(['success' => true, 'comments' => $admin_comments]);
        }

        return response()->json(['success' => false]);
        // return view('admin_comments', compact('admin_comments'));
        // return  $admin_comments;
    }

    public function destroy(Request $request)
    {
        // $comment->delete();
        // //amb el id passat per parametre recupero el comentari sencer
        // //select * from comentaris whre id = $id
        // //$comment = Comment::destroy($id);
        // return redirect()->route('admin_comments');

        $comment = Comment::find($request->id);

        if ($comment) {
            $comment->delete();
            return response()->json(['success' => true]);
        }

        // return $comment;
        return response()->json(['success' => false]);

        // Comment::destroy($comment);

    }


    //metode del controlador que em guarda
    public function store(Request $request)
    {
        //$comment = Comment::create($request->all()->);
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->id_player = $request->id_player;
        if ($comment->save()) {
            return response()->json(['success' => true]);
        }
        // $comment->id_player=Auth::user()->id;
        // $comment->save();
        // if(Auth::user()->role == 'admin'){
        //     return redirect()->route('admin_comments', $comment);
        // }else{
        //     return redirect()->route('comments', $comment);
        // }

        return response()->json(['success' => false]);
    }


    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'comment' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false]);
        } else {
            $comment = Comment::find($request->id);
            if ($comment) {
                $comment->comment = $request->comment;
                if ($comment->save()) {
                    return response()->json(['success' => true]);
                }
            }
        }
        return response()->json(['success' => false]);

        // $comment = Comment::find($request->id);
        // $comment->comment = $request->comment;
        // $comment->save();
        // return   response()->json(['success' => true, 'comment' => $comment]);
    }

    public function find_comment(Request $comment)
    {
        $admin_comments = Comment::join('users', 'users.id', '=', 'comments.id_player')
            ->select('users.nickname', 'users.email',  'comments.id', 'comments.comment')
            ->paginate(11);

        $comment_selected = Comment::find($comment->id);

        return $comment_selected;
        // return view('admin_comments', compact('admin_comments', 'comment_selected'));
        // return view('admin_comments', compact( 'comment_selected'));
    }
}
