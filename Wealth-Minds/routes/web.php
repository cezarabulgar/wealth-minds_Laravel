<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesCategoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route to set a tracking or preference cookie
Route::get('/set-cookie', [CookieController::class, 'setCookie']);

// Route to accept cookies
Route::get('/accept-cookies', [CookieController::class, 'acceptCookies'])->name('accept-cookies');

// Route to reject cookies
Route::get('/reject-cookies', [CookieController::class, 'rejectCookies'])->name('reject-cookies');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',[PageController::class, 'homepage'])->name('welcome');

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class,'contact']);

Route::get('/courses', [PageController::class,'courses']);

Route::get('/financialbasics', [PageController::class,'financialBasics']);

Route::get('/educational-resources', [PageController::class, 'educationalResources']);

Route::get('/webinars-workshops', [PageController::class, 'webinarsWorkshops']);

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/filter-courses', [CourseController::class, 'filterCourses']);
Route::get('/all-courses', [CourseController::class, 'getAllCourses']);

Route::post('/welcome/submit', [ContactController::class, 'submitForm'])->name('welcome');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
