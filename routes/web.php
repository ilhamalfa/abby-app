<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/caraudio', function () {
    return view('audio.audio');
});

Route::get('/autodetailing', function () {
    return view('auto.auto');
});

Route::get('/gallery', function () {
    return view('gallery.category.showroom');
});

Route::get('/gallery-showroom', function () {
    return view('gallery.category.showroom');
});

Route::get('/gallery-caraudio', function () {
    return view('gallery.category.caraudio');
});

Route::get('/gallery-autodetailing', function () {
    return view('gallery.category.autodetailing');
});

Route::get('/profile', function () {
    return view('profile.profile');
});
