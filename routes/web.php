<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("cesar", function () {
    return view('cesar');
});

Route::get("emi", function () {
    return view('emi');
});

Route::get("carlos", function () {
    return view('carlos');
});

Route::get("erick", function () {
    return view('erick');
});

Route::get("uriel", function () {
    return view('uriel');
});

Route::get("ally", function () {
    return view('Alondra');
});

Route::get("arturo", function () {
    return view('arturo');
});