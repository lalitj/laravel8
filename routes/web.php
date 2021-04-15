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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
//
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/task', function () {
        return Inertia::render('OurWelcome');
    })->name('welcome');

    //    Route::get('task', function () {
    //        return Inertia::render('Task');
    //    })->name('task');

    Route::resource('/', \App\Http\Controllers\TaskController::class);

    //CRUD => Resourcefull Controller
    //create => create
    //Read => Lists => index , Show => show
    //Update => edit, update
    //Delete => destroy

    include("sub/client.php");
});
