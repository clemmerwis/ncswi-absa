<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/usermenu', function () {
    return view('pages.usermenu');
})->name('usermenu');
