<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;


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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
