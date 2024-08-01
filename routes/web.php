<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/list', function () {
    return view('list');
})->name('list');

Route::get('/details', function () {
    return view('details');
})->name('details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/store', 'MemberController@store')->name('member.store');
