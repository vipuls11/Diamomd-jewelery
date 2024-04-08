<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/productsingle', function () {
    return view('productsingle');
});

Route::get('/enquiryform', function () {
    return view('enquiryform');
});