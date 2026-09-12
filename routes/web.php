<?php

use Illuminate\Support\Facades\Route;
use App\PasswordGenerator;

Route::get('/password', function () {
    $message = "Grazie per averci scelto";

    $passwordGenerator = new PasswordGenerator();
    $password = $passwordGenerator->generatePassword();

    return view('password', compact(["message", "password"]));
})->name("password");

Route::get('/', function () {
    return view('home');
})->name("index");
