<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{   
    public function __construct() {
        $this->middleware('auth');
    }

    public function create(Request $request) {
        $comment = new Comment;
        $comment->content = $request->input('content');
        $comment->article_id = $request->input('article_id');
        $comment->user_id = 1;
        $comment->save();
        return back();
    }

    public function delete($id) {
        if($comment->user_id == auth()->user()->id) {
            $comment->delete();
            return back();
        } else {
            return back()->with('error', 'Unauthorize');    
        }
    }
}
