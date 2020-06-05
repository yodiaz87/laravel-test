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

Route::middleware('auth:api')->get('/notificaions', 'NotificationsController@notifications');
Route::middleware('auth:api')->post('/notificaions', 'NotificationsController@notifications');
Route::middleware('auth:api')->put('/notificaions', 'NotificationsController@notifications');
Route::middleware('auth:api')->delete('/notificaions', 'NotificationsController@notifications');
