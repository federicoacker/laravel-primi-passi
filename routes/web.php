<?php

use Illuminate\Support\Facades\Route;

Route::get('/password', function() {
    return view('password');
});

Route::get('/', function () {
    return view('home');
});
