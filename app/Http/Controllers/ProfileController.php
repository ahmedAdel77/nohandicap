<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show User Profile
    public function show()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('profile.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    // Edit User Profile
    public function edit($id)
    {
        $user = User::find($id);
        return view('profile.edit', compact('user'));
    }

}
