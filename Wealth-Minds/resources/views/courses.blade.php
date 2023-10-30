@extends('layouts.app')

@section('heading', 'Learn to Master Your Finances with WealthMinds')

@section('paragraph', 'Unlock your financial potential with our comprehensive courses.')

@section('content')

<section class="coursesSection" id="coursesSection">
  <div class="courses-header">
    <h2>Our Courses</h2>
    <p>At WealthMinds, we are dedicated to providing comprehensive financial education and empowering individuals like you to take control of their financial future. <br>Through our range of services, we offer you the knowledge, tools, and resources needed to make informed financial decisions and achieve your goals.</p>
  </div>

<select name="category_id" id="category-select">
        <option value="">All Courses</option>
        @foreach($categories->unique('name') as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>


  <div class="financial_course" id="course-list">
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

<script>
$(document).ready(function () {
    $('#category-select').change(function () {
        var selectedCategory = $(this).val();

        // Check if the selected category is empty (All Categories)
        if (selectedCategory === "") {
            // If it's empty, load all courses without applying a category filter
            loadAllCourses();
        } else {
            // Send an AJAX request to the server to filter courses by category
            $.ajax({
                type: 'GET',
                url: '/filter-courses',
                data: { category_id: selectedCategory },
                success: function (response) {
                    // Handle the response here, e.g., update the UI with the filtered data
                    var courses = response.courses;
                    // Clear the current course list
                    $('#course-list').empty();

                    // Loop through the filtered courses and add them to the course list
                    $.each(courses, function(index, course) {
                        var courseHtml = `
                            <div class="course" onmouseover="toggleCourseClass(this)" onmouseout="toggleCourseClass(this)">
                                <div class="icon">
                                    <i class="fa-solid fa-lines-leaning"></i>
                                </div>
                                <h3>${course.title}</h3>
                                <p>Duration: ${course.duration}</p>
                                <p>Instructor: ${course.instructor}</p>
                                <p>Price: ${course.price}</p>
                                <button class="btn"><span></span>View Courses</button>
                            </div>
                        `;

                        // Append the course to the course list
                        $('#course-list').append(courseHtml);
                    });
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });

    // Function to load all courses without a category filter
    function loadAllCourses() {
        $.ajax({
            type: 'GET',
            url: '/all-courses', // You can create a new route/controller method for loading all courses
            success: function (response) {
                var courses = response.courses;
                // Clear the current course list
                $('#course-list').empty();

                // Loop through all courses and add them to the course list
                $.each(courses, function(index, course) {
                    var courseHtml = `
                        <div class="course" onmouseover="toggleCourseClass(this)" onmouseout="toggleCourseClass(this)">
                            <div class="icon">
                                <i class="fa-solid fa-lines-leaning"></i>
                            </div>
                            <h3>${course.title}</h3>
                            <p>Duration: ${course.duration}</p>
                            <p>Instructor: ${course.instructor}</p>
                            <p>Price: ${course.price}</p>
                            <button class="btn"><span></span>View Courses</button>
                        </div>
                    `;

                    // Append the course to the course list
                    $('#course-list').append(courseHtml);
                });
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }
});

</script>






@endsection
