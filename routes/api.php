<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('login', 'APILoginController@login');

Route::prefix('/articles')->group(function() {
    Route::get('/', ['uses' => 'ArticleController@get']);
    Route::get('/{article_id}', ['uses' => 'ArticleController@detail'])->where(['article_id' => '[0-9+]']);
    Route::post('/', ['uses' => 'ArticleController@createArticle'])->middleware('jwt.auth');
    Route::delete('/{article_id}', ['uses' => 'ArticleController@delete'])->where(['article_id' => '[0-9+]'])->middleware('jwt.auth');
    Route::put('/{article_id}', ['uses' => 'ArticleController@updateArticle'])->where(['article_id' => '[0-9+]'])->middleware('jwt.auth');
});