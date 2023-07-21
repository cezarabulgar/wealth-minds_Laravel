@extends('layout')
@section('content')

<section class="login-section">
  <div class="container">
    <form class="login-form" action="{{ Route('login.post') }}" method="POST" id="loginForm">
      @csrf
      <h2>Welcome Back!</h2>
      <h3>Log in to access your account.</h3>
      <input type="text" name="email" placeholder="Enter E-mail">

      <input type="password" placeholder="Enter Password" name="password" required>

      <div class="button-group">
        <button type="Submit" id="loginBtn"><span></span>Log In</button>
        <button type="button" id="cancelBtn"><span></span>Cancel</button>
      </div>

      <div class="aditional-options">
        <label class="remember-box"><input type="checkbox" checked="checked" name="remember"><span></span>Remember me</label>
        <a href="#">Forgot password?</a>
      </div>
    </form>
  </div>
</section>

@endsection