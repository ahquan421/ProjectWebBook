<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Models\Course;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/courses',[CourseController::class,'index'])->name('course.index');
Route::get('/courses/create',[CourseController::class,'create'])->name('course.create');
Route::post('/courses',[CourseController::class,'store'])->name('course.store');

//Tai trang chinh sua
Route::get('/courses/{course}/edit',[CourseController::class,'edit'])->name('course.edit');
Route::put('/courses/{course}',[CourseController::class,"update"])->name('course.update');

//Hien thi chi tiet sach
Route::get('/courses/{course}/show',[CourseController::class,"show"])->name('course.show');

//Xoa sach
Route::delete('/courses/{course}',[CourseController::class,"destroy"])->name('course.destroy');


Route::get('/login/', [LoginController::class,'login'])->name('login');
Route::get('/home',[LoginController::class,'home'])->name('home');



Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.handle');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('register.handle');

