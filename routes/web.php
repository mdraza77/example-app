<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Container\Attributes\Singleton;

// Route::get('/{name?}', function ($name= null) {
//     $demo = "<h2>Md Raza</h2>";
//     $data = compact('name', 'demo');
//     return view('home')->with($data);
// });
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/courses', function () {
//     return view('courses');
// });

Route::get('/', [DemoController::class, 'index']);
Route::get('/about', [DemoController::class, 'about']);
// Route::get('/courses', [DemoController::class, 'courses']);
Route::get('/courses', SingleActionController::class);

