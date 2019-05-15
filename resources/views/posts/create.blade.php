@extends('layouts.main')
@section('title','Create Post')
@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <form method="post" action="{{route('posts.store')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" name="title" placeholder="Post Title" type="text" class="form-control
                     {{ $errors->has('title') ? 'is-invalid' : '' }}">
                    @if($errors->has('title'))
                     <small class="text-danger">{{$errors->first('title')}}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea placeholder="Enter Post Content" name="body" id="body" class="form-control
                     {{ $errors->has('body') ? 'is-invalid' : '' }}  "></textarea>
                    @if($errors->has('body'))
                        <small class="text-danger">{{$errors->first('body')}}</small>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection