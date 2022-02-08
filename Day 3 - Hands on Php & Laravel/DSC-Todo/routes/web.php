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

// Route::get('/LoginRedirect', [App\Http\Controllers\StatusController::class, 'index']);

Route::group(['middleware' => 'verified','auth'], function () {
Route::get('/home', [App\Http\Controllers\ToDoController::class, 'index']);
Route::post('/home', [App\Http\Controllers\ToDoController::class, 'save']);
Route::get('/delete/{id}', [App\Http\Controllers\ToDoController::class, 'delete']);
Route::get('/finish/{id}', [App\Http\Controllers\ToDoController::class, 'finish']);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/signin');
})->name('login')->middleware('guest');

Route::get('/forgot', function () {
    return view('auth/forgot');
})->middleware('guest');

Route::get('/reset', function () {
    return view('auth/reset');
})->middleware('guest');

Route::get('/register', function () {
    return view('auth/register');
})->middleware('guest');

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
});