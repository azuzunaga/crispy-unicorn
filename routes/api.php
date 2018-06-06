<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/users', 'UserController')->only([
    'index', 'show'
]);

Route::group(['prefix'=>'user'],function(){
	Route::apiResource('/{user}/connections','ConnectionController')->only([
        'index', 'destroy'
    ]);
});


Route::apiResource('/colors', 'ColorController')->only([
    'index', 'show'
]);
