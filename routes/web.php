<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeDashboardController;
use App\Models\FooterAddress;
use App\Models\FooterContactCar;
use App\Models\FooterContactDetailling;
use App\Models\FooterSocmed;
use App\Models\HomeCarouselBanner;
use App\Models\HomeHighlight;
use App\Models\HomeService;
use App\Models\HomeValue;
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
    $address = FooterAddress::find(1);
    $socmeds = FooterSocmed::where('is_active', true)->get();
    $contactcar = FooterContactCar::find(1);
    $contactdetailing = FooterContactDetailling::find(1);
    $carousels = HomeCarouselBanner::all();
    $services = HomeService::limit(4)->get();
    $values = HomeValue::all();
    $highlights = HomeHighlight::all();

    return view('home', [
        'address' => $address,
        'socmeds' => $socmeds,
        'contactcar' => $contactcar,
        'contactdetailing' => $contactdetailing,
        'carousels' => $carousels,
        'services' => $services,
        'values' => $values,
        'highlights' => $highlights,
    ]);
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

// Dashboard Home Controller
Route::get('/dashboard/home', [HomeDashboardController::class, 'index']);

    // Add, Edit, Delete Carousel
    Route::post('/dashboard/home/addCarousel', [HomeDashboardController::class, 'storeCarousel']);
    Route::post('/dashboard/home/editCarousel/{id}', [HomeDashboardController::class, 'updateCarousel']);
    Route::get('/dashboard/home/deleteCarousel/{id}', [HomeDashboardController::class, 'deleteCarousel']);

    // Add, Edit, Delete Service
    Route::post('/dashboard/home/addService', [HomeDashboardController::class, 'storeService']);
    Route::post('/dashboard/home/editService/{id}', [HomeDashboardController::class, 'updateService']);
    Route::get('/dashboard/home/deleteService/{id}', [HomeDashboardController::class, 'deleteService']);

    // Add, Edit, Delete Value
    Route::post('/dashboard/home/addValue', [HomeDashboardController::class, 'storeValue']);
    Route::post('/dashboard/home/editValue/{id}', [HomeDashboardController::class, 'updateValue']);
    Route::get('/dashboard/home/deleteValue/{id}', [HomeDashboardController::class, 'deleteValue']);

        // Add, Edit, Delete Highlight
        Route::post('/dashboard/home/addHighlight', [HomeDashboardController::class, 'storeHighlight']);
        Route::post('/dashboard/home/editHighlight/{id}', [HomeDashboardController::class, 'updateHighlight']);
        Route::get('/dashboard/home/deleteHighlight/{id}', [HomeDashboardController::class, 'deleteHighlight']);