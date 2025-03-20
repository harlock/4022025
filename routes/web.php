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
Route::get("maite", function () {
    return view('maite');
});

Route::get("arturo", function () {
    return view('arturo');
});

Route::get("chavez", function () {
    return view('chavez');
});

Route::get("adan", function () {
    return view('adan');
});

Route::get("jesusemiliano", function () {
    return view('jesusemiliano');
});

Route::get("imanol", function () {
    return view('imanol');
});



Route::get("ivonne", function () {
    return view('ivonne');
});

Route::get("diegocruz", function () {
    return view('diegocruz');
});

Route::get("luisroberto", function () {
    return view('luisroberto');
});

Route::get("alexis", function () {
    return view('alexis');
});

Route::get("roman", function () {
    return view('roman');
});

Route::get("adrian", function () {
    return view('Adrian');
});

Route::get("fatima", function () {
    return view('fatima');
});

Route::get("gael", function () {
    return view('gael');
});

Route::get("darina", function () {
    return view('darina');
});

Route::get("emmanuel", function () {
    return view('emmanuel');
});

Route::get("diego", function () {
    return view('diego');
});

Route::get("alberto", function () {
    return view('alberto');
});

Route::get("jesus", function () {
    return view('jesus');
});

Route::get("charbel", function () {
    return view('charbel');
});
