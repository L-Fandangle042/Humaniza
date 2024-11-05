<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('form');
});

Route::get('/test', function () {
    // return view('welcome');
    return 'THIS IS A TEST';
});
