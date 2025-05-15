<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TaskController;

// Main routes
Route::get('/', function () {
    return view('welcome');  // This will show your welcome page
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index']);

// Resource routes
Route::resource('blogs', BlogController::class);
Route::resource('tasks', TaskController::class);

