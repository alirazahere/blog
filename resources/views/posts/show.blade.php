@extends('layouts.main')
@section('title','Post')
@section('content')
    <div class="row">
        <div class="col-8">
            <h1 class="display-4">{{ $post->title }}</h1>
            <p class="lead"> {{ $post->body  }} </p>
            <hr>
        </div>
        <div class="col-3 offset-1">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="card-text">
                        <dl class="row">
                            <dt class="col-6">Created At: </dt>
                            <dd class="col-6">{{ date('M j,Y',strtotime($post->created_at))  }}</dd>
                        </dl>
                        <dl class="row">
                            <dt class="col-6">Updated At: </dt>
                            <dd class="col-6">{{ date('M j,Y',strtotime($post->updated_at))  }}</dd>
                        </dl>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6"><a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-block">Edit</a></div>
                        <div class="col-6"><a href="{{route('posts.destroy',$post->id)}}" class="btn btn-danger btn-block">Delete</a></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection