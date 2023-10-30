@extends('layouts.app')

@section('heading', 'Learn to Master Your Finances with WealthMinds')

@section('paragraph', 'Unlock your financial potential with our comprehensive courses.')

@section('content')

<section class="coursesSection" id="coursesSection">
  <div class="courses-header">
    <h2>Our Courses</h2>
    <p>At WealthMinds, we are dedicated to providing comprehensive financial education and empowering individuals like you to take control of their financial future. <br>Through our range of services, we offer you the knowledge, tools, and resources needed to make informed financial decisions and achieve your goals.</p>
  </div>

  <div class="financial_course">
    @foreach($courses as $course)
    <div class="course" onmouseover="toggleCourseClass(this)" onmouseout="toggleCourseClass(this)">
      <div class="icon">
        <i class="fa-solid fa-lines-leaning"></i>
      </div>
      <h3>{{ $course->title }}</h3>
      <p>Duration: {{ $course->duration }}</p>
      <p>Instructor: {{ $course->instructor }}</p>
      <p>Price: {{ $course->price }}</p>
      <button class="btn"><span></span>View Courses</button>
    </div>
    @endforeach
  </div>
</section>

@endsection
