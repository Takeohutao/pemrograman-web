<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/pakaian', function () {
    return view('pakaian');
});

Route::get('/alatmakan', function () {
    return view('alatmakan');
});

Route::get('/alatmandi', function () {
    return view('alatmandi');
});

Route::get('/mainan', function () {
    return view('mainan');
});