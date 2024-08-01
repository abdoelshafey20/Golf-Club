<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/showall',"API\MemberController@index");

Route::get('/showone/{id}',"API\MemberController@show");
