<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use validator;


class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index',compact('posts'));
    }

    

    public function show(Post $post)
    {   
        return view('posts.show',compact('post'));

    }


    public function create()
    {
        return view('posts.create');
    }

    public function edit()
    {
        return view('posts.edit');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
       //save to database

       Post::create(request(['tilte','body']));

       return redirect('/');
       
   }

    public function about()

    {
        return view ('layouts.about');
    }
}
