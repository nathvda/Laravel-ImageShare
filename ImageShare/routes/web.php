<?php

use App\Models\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SessionController;

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
    return view('App');
})->middleware('guest');

Route::get('/register',function () {
    return view('Users.create');
})->middleware('guest');

Route::get('/feed',function () {
    return view('Feed.index', ['images' => Image::inRandomOrder()->get()]);
})->middleware('auth');

Route::get('/create',function () {
    return view('Images.create');
})->middleware('auth');

Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/create', [ImageController::class, 'store'])->middleware('auth');

Route::get('/viewcard/{image:id}', [ImageController::class, 'show'])->middleware('auth');

Route::get('/profile/{user:id}', [UserController::class, 'show'])->middleware('auth');
