<?php

use App\Http\Controllers\MANAGE\ManageArticlesController;
use App\Http\Controllers\MANAGE\ManageCategoriesController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::resource('articles',ManageArticlesController::class);
Route::resource('categories',ManageCategoriesController::class);
// Route::resource('/categories/edit',ManageCategoriesController::class);
// Route::resource('/categories/destroy',ManageCategoriesController::class);
// Route::get('categories',[ManageCategoriesController::class,'index']);
// Route::get('categories/edit/{id}',[ManageCategoriesController::class,'edit']);
// Route::put('categories/update/{id}',[ManageCategoriesController::class,'update']);
// Route::delete('categories/destroy/{id}', [ManageCategoriesController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
