@extends('layouts.master')

@section('content')
        <div class="col-sm-8 blog-main">

        @include('partials.error')   
        
            <h1>{{$post->title}}</h1>

            {{$post->body}}
        <hr>

        {{--  <div class="comment">

            @foreach($comments as $comment)
               <pre>
               {{$comment->created_at->diffForHumans()}}: &nbsp;
               </pre>               
                <code>
                <ul class="list-group">
                {{$comment->body}}
                </ul>
                </code>
            @endforeach
        </div>  --}}

            {{--  <div class="card">  --}}
                <div class="card-block">
                    <form method="POST" action="/posts/{{$post->id}}/comments">
                             {{ csrf_field() }}

                        <fieldset class="form-group">
                                <textarea class="form-control" id="body" name="body"rows="3" placeholder="Your comment here"></textarea>
                                <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            {{--  </div>  --}}


        {{--  @include('layouts.footer')     --}}
        </div>

@endsection