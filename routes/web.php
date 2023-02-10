<?php

use App\Http\Controllers\FooterController;
use App\Models\FooterAddress;
use App\Models\FooterSocmed;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard Footer Controller
    Route::get('/dashboard/footer', [FooterController::class, 'index']);

    // Update address
    Route::post('/dashboard/footer/updateAddress/{id}', [FooterController::class, 'updateAddress']);

    //Add, Update, Activate, Delete Socmeds 
    Route::post('/dashboard/footer/addSocmeds/', [FooterController::class, 'addSocmeds']);
    Route::post('/dashboard/footer/updateSocmeds/{id}', [FooterController::class, 'updateSocmeds']);
    Route::get('/dashboard/footer/activateSocmeds/{id}', [FooterController::class, 'activateSocmeds']);
    Route::get('/dashboard/footer/deleteSocmeds/{id}', [FooterController::class, 'deleteSocmeds']);

    // Contact Car
    Route::post('/dashboard/footer/updateContactCar/{id}', [FooterController::class, 'updateContactCar']);

    // Contact auto
    Route::post('/dashboard/footer/updateContactAuto/{id}', [FooterController::class, 'updateContactAuto']);
