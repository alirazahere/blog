@extends('layouts.main')
@section('title','Contact')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Contact Me</h1>
        <p class="lead">Fill this form to contact me for ant queries.</p>
        <hr class="my-4">
        <div class="container">
        <form action="#">
            <div class="form-group">
               <label for="Email">Email :</label>
                <input id="Email" placeholder="Email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="subject">Subject :</label>
                <input id="subject" placeholder="Subject" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" class="form-control">Type your message here...</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-success">
            </div>
        </form>
        </div>
    </div>
@endsection