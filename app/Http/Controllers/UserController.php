<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user =User::findOrFail($id);
        return view('user.edit', compact('user'));
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

        $file1 = $request->file('profile_picture');
        $file2 = $request->file('card_identity');
        if($file1 && $file2){
            unlink('images/' . $user->profile_picture);
            unlink('images/' . $user->card_identity);
            $profile_picture = $file1->getClientOriginalName();
            $card_identity = $file2->getClientOriginalName();
            $file1->move('images',$profile_picture);
            $file2->move('images',$card_identity);
            $input['profile_picture'] = $profile_picture;
            $input['card_identity'] = $card_identity;
        }

        $user->update($input);
        return "Success";

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
