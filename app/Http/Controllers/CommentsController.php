<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //

    public function store(Post $post)
    {
        Comment::create([
            'body'=>request('body'),
            'post_id'=>request('post_id')

        ]);
        
        return back();
    }
}
