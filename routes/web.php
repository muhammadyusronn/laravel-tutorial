<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About"
    ]);
});

Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/detail/{blog:slug}', [BlogController::class, 'show']);
Route::get('/blog/categories/{category:slug}', [BlogController::class, 'blogByCategory']);
Route::get('/blog/author/{author:username}', [BlogController::class, 'blogByAuthor']);
