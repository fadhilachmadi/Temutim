<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Comment;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function send(Request $request, $post_id){

        $id = $post_id;
        // dd( $post_id);
        Comment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $post_id,
            'text' => $request->comment_text,
            'comment_time' => Carbon::now(),
        ]);

        return redirect()->action([PostController::class, 'detail'], ['id' => $post_id]);

    }
}
