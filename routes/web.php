<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('posts.index');
});
*/
Route::get('/',[PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']); //posts/{post}より上に書くこと。（{post}にcreateが入る恐れがある。
Route::get('posts/{post}',[PostController::class, 'show']);

Route::post('/posts', [PostController::class, 'store']);