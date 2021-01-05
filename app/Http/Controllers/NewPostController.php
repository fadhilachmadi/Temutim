<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\RequiredRole;
use DateTime;
use Illuminate\Http\Request;

class NewPostController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function createNewPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:1',
            'description' => 'required|min:1',
            'name' => 'required|min:1',
            'imagefile' => 'required',
            'project_type' => 'required'
        ]);

        $filename = 'no data';
        $file = $request->file('imagefile');
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName() . time() . "." . $extension;
        $file->storeAs('public/postImage', $filename);


        $newpost = new Post();
        $newpost->user_id = Auth::id();
        $newpost->title = $request->name;
        $newpost->description = $request->description;
        $newpost->post_date = date('Y-m-d H:i:s');
        $newpost->media_file = $filename;
        $newpost->save();

        $newid = $newpost->id;
        return redirect('/post/role/' . $newid);
    }

    public function createRequiredRole(Request $request, $id)
    {
        $newRole = new RequiredRole();
        $newRole->post_id = $id;
        $newRole->name = $request->name;
        $newRole->quantity = $request->quantity;
        $newRole->save();

        return redirect('/post/role/' . $id);
    }

    public function getPostRole($id)
    {
        $allRole = RequiredRole::where('post_id', $id)->paginate(5);
        return view('addrole', ['allRole' => $allRole, 'postId' => $id]);
    }
}
