@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
    <h3>Create a Post</h3>
        <form action="/posts" method="POST">
            {{ csrf_field() }}

            @include('partials.error')
            
            <div class="form-group">

                
                <label for="title">Title</label>

                <select class="form-control">
                    <option>BINARY OPERATIONS</option>
                    <option> COMPOUND INTEREST</option>
                    <option> CONDITIONAL PROBABILITY</option>
                    <option>CONGRUENT TRIANGLES</option>
                    <option> CONGRUENT TRIANGLES</option>
                    <option> COSINE FORMULA</option>
                    <option> EQUATIONS INVOLVING FRACTIONS</option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    
                    
                
                </select>
                {{--  <input type="title" class="form-control" id="title" name="title" placeholder="Enter Course Title of the Post">   --}}
            
            </div>
            <fieldset class="form-group">
		        <label for="body">Content</label>
		        <textarea class="form-control" id="body" name="body"rows="5"></textarea>
	       
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            
        </form>
    </div>
@endsection
