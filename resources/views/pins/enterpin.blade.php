@extends('layouts.master')

@section('content')
        <div class="col-sm-8 blog-main">
        <h1> Please User are Allow to use the correct Pin </h1>
        <fieldset class="form-group">
                <label for="pin">Ente Pin</label>
                <input type="password" class="form-control" id="pin" placeholder="Enter Pin">
                <small class="text-muted">We'll never share your Pin with anyone else.</small>
	        </fieldset>

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
@endsection