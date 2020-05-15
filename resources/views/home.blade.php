@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h3>Total Posts</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h3>Comments</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h3>Connections</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-primary text-white">
                <h4>Latest Posts</h4>
              </div>
              @if (count($posts) > 0)
              <table class="table table-striped">
                <thead class="thead-inverse">
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date Posted</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td scope="row">{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>Not yet</td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="/teamwork-laravel/public/posts/{{$post->id}}/edit" class="btn btn-primary">
                      <i class="fa fa-angle-double-right"></i> Details
                    </a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
                 <h3 class="text-center">You have no posts yet.....</h3> 
              @endif
            </div>
          </div>
    </div>

@endsection
