@extends('layouts.auth')

@section('content')
<section id="register-container">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4 ml-auto">
            <div class="card bg-light">
                <h3 class="text-center">{{ __('Register') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                    
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                        </button>

                        <p class="py-4 text-center paragraph">Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
