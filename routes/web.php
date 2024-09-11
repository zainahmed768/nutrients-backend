<?php

use App\Http\Controllers\BackendController\AdminController;
use App\Http\Controllers\BackendController\BlogController;
use App\Http\Controllers\BackendController\CategoryController;
use App\Http\Controllers\BackendController\ProductController;
use App\Http\Controllers\BackendController\UserController;
use App\Http\Controllers\FrontendController\BlogController as FrontendControllerBlogController;
use App\Http\Controllers\FrontendController\CartController;
use App\Http\Controllers\FrontendController\ProductController as FrontendControllerProductController;
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
})->name('home');

Route::get('/blog', [FrontendControllerBlogController::class, 'index'])->name('blog');

Route::get('/blog-detail/{id}', [FrontendControllerBlogController::class, 'show'])->name('blog-detail');

Route::get('/login', [UserController::class, 'index'])->name('user.login');

Route::get('/register', [UserController::class, 'register'])->name('user.register');

Route::post('/register/create', [UserController::class, 'create'])->name('user.create');

Route::post('/login/authenticate', [UserController::class, 'authenticate'])->name('user.authenticate');

Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/dashboard', function () {
    return view('backEnd.pages.dashboard');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('/admin/blogs', BlogController::class);
    Route::resource('/admin/category', CategoryController::class);
    Route::resource('/admin/product', ProductController::class);
});

Route::get('/shop', [FrontendControllerProductController::class, "index"])->name('shop');
Route::get('/product/{id}', [FrontendControllerProductController::class, "show"])->name('product-detail');
Route::post("/add-to-cart", [CartController::class, "addToCart"])->name('add-to-cart');
Route::get("/cart", [CartController::class, "viewCart"])->name('cart.index');
