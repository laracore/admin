<?php

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
Route::group(['prefix' => 'api', 'middleware' => 'api', 'namespace' => 'Laracore\Admin\App\Http\Controllers\Api', 'as' => 'api.'], function () {
    Route::group([ 'prefix' => config('admin.uri'), 'as' => 'admin.'], function () {
        Route::post('main', [ 'as' => 'main', 'uses' => 'MainController@index']);
    });
});
