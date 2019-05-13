@extends('layouts.main')
@section('title','Home')

@section('content')
    <div class="row">
        <div class="col-12">
         <div class="jumbotron">
           <h1 class="display-4">Hello,Everyone!</h1>
           <p class="lead">Welcome to my laravel test blog website.</p>
           <hr class="my-4">
           <p>Click Popular post button to view my popular posts.</p>
           <a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi debitis necessitatibus reprehenderit voluptatibus. Assumenda aut consequuntur cum labore minima quasi quo repellendus, sapiente? Labore, natus officia provident quas sit voluptates!</p>
                <a class="btn btn-primary" href="#">View Post</a>
            </div>
            <hr>
            <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi debitis necessitatibus reprehenderit voluptatibus. Assumenda aut consequuntur cum labore minima quasi quo repellendus, sapiente? Labore, natus officia provident quas sit voluptates!</p>
                <a class="btn btn-primary" href="#">View Post</a>
            </div>
            <hr>
            <div class="post">
                <h2>Post Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi debitis necessitatibus reprehenderit voluptatibus. Assumenda aut consequuntur cum labore minima quasi quo repellendus, sapiente? Labore, natus officia provident quas sit voluptates!</p>
                <a class="btn btn-primary" href="#">View Post</a>
            </div>
        </div>
        <div class="col-3 offset-1">
             <h2>SideBar</h2>
        </div>
    </div>
    @endsection