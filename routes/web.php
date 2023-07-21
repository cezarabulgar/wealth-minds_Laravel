<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');



Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('courses', function () {
    return view('courses');
});

Route::get('financialbasics', function () {
    return view('financialbasics');
});

Route::get('educational-resources', function () {
    return view('educational-resources');
});

Route::get('webinars-workshops', function () {
    return view('webinars-workshops');
});
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration',[AuthManager::class,'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');