<?php

use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});





// index page
Route::get('/cinemas', [App\Http\Controllers\MovieController::class, 'index'])->middleware('auth');


// display form for creating new resource
Route::get('/cinemas/create_form', [App\Http\Controllers\MovieController::class, 'createForm'])->middleware('auth');

// display form for updating resource
Route::get('/cinemas/update_form/{id}', [App\Http\Controllers\MovieController::class, 'updateForm'])->middleware('auth');


// create new resource
Route::post('/cinemas/create', [App\Http\Controllers\MovieController::class, 'create'])->middleware('auth');


// update resource
Route::post('/cinemas/update/{id}', [App\Http\Controllers\MovieController::class, 'update'])->middleware('auth');

// delete resource
Route::get('/cinemas/destroy/{id}', [App\Http\Controllers\MovieController::class, 'destroy'])->middleware('auth');


// show one resource
Route::get('/cinemas/show/{id}', [App\Http\Controllers\MovieController::class, 'show'])->middleware('auth');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

