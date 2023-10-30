@extends('layouts.log')

@section('content')
<section class="login-section">
<div class="container">
    <form method="POST" action="{{ route('login') }}" class="login-form" id="loginForm">
        @csrf
        <h2>Welcome Back!</h2>
        
      <h3>Log in to access your account.</h3>

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter E-mail" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

         <div class="button-group">
        <button type="Submit" id="loginBtn">{{ __('Login') }}<span></span></button>
        <button type="button" id="cancelBtn"><span></span>Cancel</button>
      </div>

        {{-- <div class="form-group">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button> --}}

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
</div>
</section>
@endsection
