<?php

use App\Http\Controllers\API\ArticlesController;
use App\Http\Controllers\API\CategoriesController;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('articles',[ArticlesController::class,'index']);
Route::get('articles/show/{id}',[ArticlesController::class,'show']);
Route::post('articles/store',[ArticlesController::class,'store']);
Route::put('articles/update/{id}',[ArticlesController::class,'update']);
Route::delete('articles/destroy/{id}', [ArticlesController::class, 'destroy']);

Route::get('categories',[CategoriesController::class,'index']);
Route::get('categories/show/{id}',[CategoriesController::class,'show']);
Route::post('categories/store',[CategoriesController::class,'store']);
Route::put('categories/update/{id}',[CategoriesController::class,'update']);
Route::delete('categories/destroy/{id}', [CategoriesController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
