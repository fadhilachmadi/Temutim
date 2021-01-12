<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $search = $request->get('search');

        $posts = Post::where('title', 'like', '%'.$search.'%')->orWhere('description', 'like', '%'.$search.'%')->get();
        $users = DB::table('users')->whereNotIn('id', [auth()->user()->id])->inRandomOrder()->limit(3)->get();
        $projects = Post::where('user_id', auth()->user()->id)->get();
        return view('home')
        ->with('posts', $posts)
        ->with('users', $users)
        ->with('projects', $projects);


    }
}
