<?php

use Illuminate\Support\Facades\Route;


// return home page
Route::get('/', function () {
    return view('pages.page1');
})->name("index");

// return page 2
Route::get('/page2', function () {
    return view('pages.page2');
})->name("page2");

// return page 3
Route::get('/page3', function () {
    return view('pages.page3');
})->name("page3");
