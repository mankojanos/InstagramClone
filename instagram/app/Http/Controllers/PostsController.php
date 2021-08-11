<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
           'caption' =>'required',
           'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads', 'public'); //save local storage

       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath
       ]);

       return redirect('profile/' . auth()->user()->id);


        dd(request()->all());
    }
}
