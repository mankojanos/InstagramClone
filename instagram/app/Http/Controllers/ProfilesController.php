<?php

namespace App\Http\Controllers;

use Aoo\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = \App\Models\User::findOrFail($user);
        return view('home', [
            'user' => $user
        ]);
    }
}
