@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row">
                <h1>All blog posts</h1>
            </div>
                    @if (count($posts) > 0)
                    <div class="row">
                            @foreach ($posts as $post)
                            <div class="col-lg-4 col-md-6 py-2">
                                <div class="card">
                                    <div class="card-body">
                                    <img style=" margin-top: -30px" src="storage/cover_images/{{$post->cover_image}}" alt="" class="img-fluid rounded-circle w-80 mb-4 mx-auto">
                                <h3 class="text-center">{{$post->title}}</h3>
                                <small>Written on {{$post->created_at}}</small>
                                    <a href="/teamwork-laravel/public/posts/{{$post->id}}" class="btn btn-primary btn-block">Read more</a>
                            </div>
                             </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                    <div class="row">
                       <div class="col-md-12">
                           <h1 class="text-center">No posts yet.............</h1>
                       </div> 
                    </div>
                    @endif
    </div>
@endsection