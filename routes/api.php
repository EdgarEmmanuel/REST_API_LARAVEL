<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("articles","ArticleController@getAll");
Route::get("articles/{id}","ArticleController@getOneArticle");
Route::post("articles","ArticleController@AddArticle");
Route::put("articles/{id}","ArticleController@UpdateOneArticle");
Route::delete("articles/{id}","ArticleController@DeleteOneArticle");