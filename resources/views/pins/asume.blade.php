@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

    @include('partials.success')

    @foreach($pin_array as $pin)

        <td >'.$sn.'</td>';
        <td >'.$pin.'</td>';



    @endforeach

    </div>

@endsection