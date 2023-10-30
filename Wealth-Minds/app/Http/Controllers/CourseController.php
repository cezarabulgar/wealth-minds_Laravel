<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseCategory;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $categories = CourseCategory::all();

        return view('courses', compact('courses', 'categories'));
    }

public function filterCourses(Request $request)
{
    $categoryId = $request->input('category_id');

    // Handle the case when "All Courses" is selected
    if ($categoryId === "") {
        $courses = Course::all();
    } else {
        // Filter courses by category
        $courses = Course::where('category_id', $categoryId)->get();
    }

    return response()->json(['courses' => $courses]);
}

}
