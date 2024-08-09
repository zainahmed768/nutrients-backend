<?php

use App\Http\Controllers\BackendController\UserController;
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
    return view('frontEnd.pages.home');
});

Route::get('/blog', function () {
    return view('frontEnd.pages.blogs.blog');
});

Route::get('/blog-detail', function () {
    return view('frontEnd.pages.blogs.blog-detail');
})->name('blog-detail');

Route::get('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/register', [UserController::class, 'register'])->name('user.register');

Route::post('/user/create', [UserController::class, 'create'])->name('user.create');
