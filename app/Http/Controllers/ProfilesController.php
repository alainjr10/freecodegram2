<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.index', ['user' => $user]); //or profiles/index returns profiles/index.blade.php
    }
    
    //OR we can use a more efficient way;
    //
    // public function index(\App\Models\User $user)   
    // {
    //     return view('profiles.index', compact('user'));
    // }

    public function edit(User $user) //let's use just User instead of \App\Models\User since we imported that namespace up at line 5
    {
        return view('profiles.edit', compact('user'));
    }
}
