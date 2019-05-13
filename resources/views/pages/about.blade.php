@extends('layouts.main')
@section('title','About')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hi,There I Am Ali Raza</h1>
        <p class="lead">This is test website for laravel 5.5</p>
        <hr class="my-4">
        <p>Here i am making a blog website for learning purpose</p>
        <a class="btn btn-primary btn-lg" href="{{route('contact')}}" role="button">Contact Me</a>
    </div>
@endsection