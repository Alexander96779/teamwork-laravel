@extends('layouts.app')

@section('content')
        <div class="row">
                <div class="col-md-8 mx-auto">
                    <h1 class="text-center">Create Post</h1>
                    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', '', ['class' =>'form-control textarea', 'placeholder' => 'Body'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('image', 'Add Image')}}
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
                    {!! Form::close() !!}
                </div>
        </div>
@endsection