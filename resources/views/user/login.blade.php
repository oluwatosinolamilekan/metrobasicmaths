@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1> SIGN IN </h1>
        <form action="/login" method="POST"> 
            <fieldset class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" id="username" placeholder="Enter Username">
	        </fieldset>
            
            <fieldset class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password">
	        </fieldset>

        

        </form>

    <button type="submit" class="btn btn-primary">Submit</button>

    </div>

@endsection