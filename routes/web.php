<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
//});



//Home page route with localization
Route::get('/', function () {
return view('homepage.homepage');
})->name('home');


// services page route with localization
Route::get('/services', function () {
    return view('homepage.services');
})->name('services');

