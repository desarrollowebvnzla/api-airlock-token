<?php

use Illuminate\Http\Request;
use App\User;


Route::middleware('auth:airlock')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', 'Api\Auth\AuthController@login');