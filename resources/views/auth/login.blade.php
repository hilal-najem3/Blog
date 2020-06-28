@extends('layouts.default')
@section('content')
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1 style="color: white;">Login</h1>
                <br>
                <p class="lead"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form id="contact-form" class="login-form" role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
                        
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> &nbsp;&nbsp;
                            <label class="form-check-label checkbox-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="Submit" value="Login">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="{{ asset('images/contact-1-600x400.jpg') }}" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection