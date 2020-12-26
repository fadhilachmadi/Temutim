<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\RequiredRole;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function detail($post_id){
        $post = Post::findOrFail($post_id);
        $roles = RequiredRole::where('post_id', $post_id)->get();
        $comments = Comment::where('post_id', $post_id)->get();
        // dd($comments->user->username);

        // dd($post->user->username);
        return view('post.detail')
        ->with('post', $post)
        ->with('roles', $roles)
        ->with('comments', $comments);
    }
}
