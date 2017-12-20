@extends('layouts.master')

@section('content')

        <div class="col-sm-8 blog-main">
        <a href="/posts/{{ $post->id}}"
            
        <h2 class="blog-post-title">{{$post->title}}</h2>
		</a>
        <p class="blog-post-meta">{{$post->created_at->toDayDateTimeString() }} </p>


        {{$post->body}}
            
        </div>
@endsection