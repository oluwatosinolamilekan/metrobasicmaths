@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Make User Admin </h1>
            <form action="" method="">
            <div class="form-group">
                    <label for="User" >User</label>
                    <select id="User" class="form-control" >
                        <option>User Name</option>
                        <option>Make Admin</option>                     
                    </select>
                </div>

            <div class="form-group">
                    <label for="role" >Role</label>
                    <select id="Role" class="form-control" >
                        <option>Make Admin</option>            
                        <option>Admin</option>
                        <option>Moderators</option>
                        <option>User</option>
                    </select>
                </div>
            </form>     
            <button type="submit" class="btn btn-primary">Submit</button>
           
    </div>
@endsection