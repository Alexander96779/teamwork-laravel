@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-3 mr-auto">
                <a href="/teamwork-laravel/public/posts/" class="btn btn-primary btn-block">
                    <i class="fa fa-arrow-circle-left"></i> Back to posts
                  </a>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-lg-8 col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
    <img style=" margin-top: -30px" src="{{ asset("storage/cover_images/{$post->cover_image}")}}" alt="" class="img-fluid rounded-circle w-80 mb-4 mx-auto">
                    <h1 class="text-center">{{$post->title}}</h1> 
                    <p class="text-center">{{$post->body}}</p>
                    <hr>
                    <small>Written on: {{$post->created_at}}</small>
                    </div>
            </div>
        </div>
        </div>
        @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
        <div class="row">
            <div class="col-md-3 mx-auto">
            <a href="/teamwork-laravel/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit post</a>
            </div>
            <div class="col-md-3 mr-auto">
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </div>
        </div>
        @endif
        @endif
    <hr>
    <div class="row">
        <div class="col-md-9 mx-auto">
            <h3 class="text-center text-primary">Add Comment</h3>
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                    {{Form::text('comment', '', ['class' =>'form-control', 'placeholder' => 'Type your comment here'])}}
                    </div>
                    {{Form::submit('Add comment', ['class' => 'btn btn-primary ml-auto'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection