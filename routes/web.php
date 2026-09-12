<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/services', 'services')->name('services');
Route::view('/capabilities', 'capabilities')->name('capabilities');
Route::view('/industries', 'industries')->name('industries');
Route::view('/process', 'process')->name('process');
Route::view('/tour', 'tour')->name('tour');
Route::view('/company', 'company')->name('company');
Route::view('/contact', 'contact')->name('contact');

Route::get('/event-news', function () {
    return view('event-news');
})->name('event-news');

Route::get('/downloads', function () {
    return view('downloads');
})->name('downloads');