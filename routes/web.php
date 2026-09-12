<?php

use Illuminate\Support\Facades\Route;

Route::get('/password', function() {
    $message = "Grazie per averci scelto";
    return view('password', compact("message"));
})->name("password");

Route::get('/', function () {
    return view('home');
})->name("index");
