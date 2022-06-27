<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Models\BlogModel;
use App\Models\Category;
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

Route::get('/about', function () {
    return view('about', [
        'title' => "About"
    ]);
});
// Auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);

// User Page
Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/detail/{blog:slug}', [BlogController::class, 'show']);
Route::get('/blog/categories/{category:slug}', [BlogController::class, 'blogByCategory']);
Route::get('/blog/author/{author:username}', [BlogController::class, 'blogByAuthor']);

// Admin Page
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
