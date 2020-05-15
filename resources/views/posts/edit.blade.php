@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3 mr-auto">
        <a href="/teamwork-laravel/public/posts/" class="btn btn-primary btn-block">
            <i class="fa fa-arrow-circle-left"></i> 
          </a>
    </div>
</div>
        <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="text-center">Edit Post</h1>
                    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post->title, ['class' =>'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', $post->body, ['class' =>'form-control textarea', 'placeholder' => 'Body'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('image', 'Add Image')}}
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Update Post', ['class' => 'btn btn-primary btn-block'])}}
                    {!! Form::close() !!}
                </div>
        </div>
@endsection