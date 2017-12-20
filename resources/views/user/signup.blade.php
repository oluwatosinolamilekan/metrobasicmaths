@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1> SIGN UP AN ACCOUNT </h1>
        <form action="/signup" method="POST"> 
                    {{ csrf_field() }}

            @include('partials.error')
            <fieldset class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" id="username" name="username"placeholder="Enter Username">
	        </fieldset>
            <fieldset class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                <small class="text-muted">We'll never share your email with anyone else.</small>
	        </fieldset>

            <fieldset class="form-group">
                <label for="number">Phone Number</label>
                <input type="text" class="form-control" id="number"name="number" placeholder="Enter Your Mobile Number">
	        </fieldset>

            <fieldset class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"placeholder="Enter Password">
	        </fieldset>

            

            <fieldset class="form-group">
                <label for="password">Confirm Password</label>
                <input type="Password" class="form-control" id="password"  name="password"placeholder="Confirm Your Password">
	        </fieldset>

        </form>

    <button type="submit" class="btn btn-primary">Submit</button>

    
    </div>
    

@endsection