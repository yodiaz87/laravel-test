<?php
use Illuminate\Http\Request;
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::middleware('auth:api')->get('/githubUsers', 'ApiController@githubUsers');

Route::middleware('auth:api')->get('/notifications', 'NotificationsController@index');
Route::middleware('auth:api')->get('/notifications/{notification}', 'NotificationsController@show');
Route::middleware('auth:api')->post('/notifications', 'NotificationsController@save');
Route::middleware('auth:api')->put('/notifications/{notification}', 'NotificationsController@update');
Route::middleware('auth:api')->delete('/notifications/{notification}', 'NotificationsController@delete');
