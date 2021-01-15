<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = User::where("id", $id)->first();
        return view('auth.user.profile', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id != Auth::user()->id) {
            return abort('403');
        }
        $user =User::findOrFail($id);
        return view('auth.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProfileRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if(trim($request->password == '')){
            $input = $request->except('password');
        }
        else{
            $input = $request->all();
            $input['password']=bcrypt($request->password);
        }

        if($file = $request->file('profile_picture')){
            if($user->profile_picture!=null) {
                unlink('storage/profile_pictures/' . $user->profile_picture);
            }
            $profile_picture = time() . $file->getClientOriginalName();
            Storage::putFileAs('public/profile_pictures',$file,$profile_picture);
            $input['profile_picture'] = $profile_picture;

        }

        $user->update($input);

        if ($request->CV == null){
            $CV = $user->CV;
        }
        else{
            $CVOriginName = $request->CV->getClientOriginalName();
            $CVFullName = time() . $CVOriginName;
            $request->CV->move(public_path('storage/CV'), $CVFullName);
            $CV = $CVFullName;
        }

        if ($request->portfolio == null){
            $portfolio = $user->portfolio;
        }
        else{
            $portfolioOriginName = $request->portfolio->getClientOriginalName();
            $portfolioFullName = time() . $portfolioOriginName;
            $request->portfolio->move(public_path('storage/portfolio'), $portfolioFullName);
            $portfolio = $portfolioFullName;
        }

        $user->update(['CV' => $CV, 'portfolio' => $portfolio]);

        return back()->with('msg','Update Profile Success!');

    }

    public function editCV(Reqeust $request){
        $user = User::findOrFail($request->id);
        if($file = $request->file('CV')){
            if($user->CV != null) {
                unlink('storage/' . $user->CV);
            }
            $CV = time() . $file->getClientOriginalName();
            Storage::putFileAs('public/',$file,$CV);
           
            $user->update(['CV' => $CV]);
            return back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
