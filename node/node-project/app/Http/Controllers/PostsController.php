<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'caption' => 'required',
            'description' => 'required' ,
      ]);
  
        
      
      auth()->user()->posts()->create([
          'caption' =>$data['caption'],
          'description' =>$data['description'],
      ]);
  
          return redirect('/profile/' . auth()->user()->id);
  }
}
