<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
    return Inertia::render('OurWelcome');
})->name('welcome');

// Route::middleware(['auth:sanctum', 'verified'])->get('/lalit', function () {
//     //return Inertia::render('Dashboard');
//     return "Hello";
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
//     //return Inertia::render('Dashboard');
//     $welcome = "Hello, World";
//     return view("welcome", compact("welcome"));
// })->name('dashboard');
