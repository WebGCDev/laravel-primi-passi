<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home1', function () {
    return view('home1');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/home3', function () {
    return view('home3');
});

Route::get('/home4', function () {
    return view('home4');
});
