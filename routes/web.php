<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.frontpage');
})->name('home');

Route::get('/jboard', function () {
    return view('pages.jboard');
})->name('jboard');

Route::get('/store', function () {
    return view('pages.usermenu');
})->name('store');