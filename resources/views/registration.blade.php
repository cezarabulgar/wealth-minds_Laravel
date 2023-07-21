@extends('layout')
@include('partials.navbar')    
@section('content')


<div class="registration-container">
    <form class="registration-form" action="{{Route('registration.post')}}" method="POST">
        @csrf
        <h2>Welcome to Our Website!</h2>
        <h3>Register now to access exclusive content.</h3>
        <input type="text" name="username" placeholder="Enter Username" required>
        
        <input type="text" name="email" placeholder="Enter Email">

        <input type="password" name="password" placeholder="Enter Password">

        <input type="password" name="confirm_password" placeholder="Confirm Password">
        
      <div class="button-group">
        <button type="button"><span></span>Sign Up</button>
        <button type="button"><span></span>Cancel</button>
    </div>

        <div class="aditional-options">
        <a href="login">Log In</a>
      </div>

    </div>
    </form>
@endsection

