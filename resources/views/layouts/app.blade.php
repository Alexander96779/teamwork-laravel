<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-4">
            <div class="container">
                <a href="/teamwork-laravel/public/" class="navbar-brand">
                    <img src="{{ asset('img/logo.png')}}" width="50" height="50" alt="">
                    <h3 class="d-inline align-middle">Teamwork</h3>
                  </a>
                  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <section id="dashboard" class="py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-3 bg-primary dashboard" id="basicSidebar">
                <h3 class="text-center">
                  <a href="/teamwork-laravel/public/home/" style="color: white; text-decoration: none"><i class="fa fa-home"></i> Dashboard </a>
                </h3>
                <div class="mx-auto sidebar">
                  <ul>
                    <li>
                      <a href="/teamwork-laravel/public/posts/create"><i class="fa fa-pencil"></i> New article</a>
                    </li>
                    <li>
                      <a href="/teamwork-laravel/public/posts/"><i class="fa fa-file-text"></i> View articles</a>
                    </li>
                    <li>
                      <a href="/teamwork-laravel/public/articles"><i class="fa fa-file-text"></i> Your articles</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-user-circle"></i> Profile</a>
                    </li>
                  </ul>
                </div>
                <div class="sidebar-bottom">
                  <a href="#"><i class="fa fa-comment"></i> Chat</a>
                </div>
              </div>
              <div class="col-md-9 ml-auto">

                  <main class="py-4">
                    <div class="container">
                      @include('inc.messages')
                      @yield('content')
                    </div>
                  </main>

              </div>
            </div>
          </div>
        </section>
    </div>
</body>
<script>
    function addActiveClass(){
      var objs = document.getElementsByTagName('a');          // take all 'a' tags
      for(var i = 0; i < objs.length; i++){
        if(objs[i].href == window.location.href){             // check if the user is on this link
          objs[i].className = objs[i].className + " active";  // add additional 'active' class
        }
      }
    }
  
    addActiveClass();
  </script>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
