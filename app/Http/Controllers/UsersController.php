<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $currentUser = User::find(auth()->id());
        return view('home',compact('currentUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $currentUser = User::find(auth()->id());
        return view('user.edit',compact('currentUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $currentUser = User::find(auth()->id());
        $update = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'address' => ['string'],
            'phone_number' => ['nullable','regex:/(01)[0-9]{9}/']
        ]);
        if(!$request->avatar){
            $update['avatar']=$currentUser->avatar;
        }
        if(request()->hasFile('avatar')) {
            $name = request()->file('avatar')->getClientOriginalName();
            $path = request()->file('avatar')->storeAs('avatars', $name);
            if ($path !== $currentUser->avatar) {
                $update['avatar']=$path;
            }
        };
        $currentUser->update($update);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
