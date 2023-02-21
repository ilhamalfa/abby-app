<?php

use App\Http\Controllers\AudioDashboardController;
use App\Http\Controllers\AutoDashboardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FooterDashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\AutoBannerModel;
use App\Models\AutoBrandsModel;
use App\Models\AutoHighlightModel;
use App\Models\AutoServiceModel;
use App\Models\CarBannerModel;
use App\Models\CarBrandsModel;
use App\Models\CarHighlightModel;
use App\Models\CarServiceModel;
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
    $address = FooterAddress::find(1);
    $socmeds = FooterSocmed::where('is_active', true)->get();
    $contactcar = FooterContactCar::find(1);
    $contactdetailing = FooterContactDetailling::find(1);
    $banner = CarBannerModel::first();
    $service1 = CarServiceModel::where('kolom', 1)->first();
    $service2 = CarServiceModel::where('kolom', 2)->first();
    $highlights = CarHighlightModel::all();
    $brands = CarBrandsModel::all();

    return view('audio.audio', [
        'address' => $address,
        'socmeds' => $socmeds,
        'contactcar' => $contactcar,
        'contactdetailing' => $contactdetailing,
        'banner' => $banner,
        'service1' => $service1,
        'service2' => $service2,
        'highlights' => $highlights,
        'brands' => $brands,
    ]);
});

Route::get('/autodetailing', function () {
    $address = FooterAddress::find(1);
    $socmeds = FooterSocmed::where('is_active', true)->get();
    $contactcar = FooterContactCar::find(1);
    $contactdetailing = FooterContactDetailling::find(1);
    $banner = AutoBannerModel::first();
    $service1 = AutoServiceModel::where('kolom', 1)->first();
    $service2 = AutoServiceModel::where('kolom', 2)->first();
    $highlights = AutoHighlightModel::all();
    $brands = AutoBrandsModel::all();

    return view('auto.auto', [
        'address' => $address,
        'socmeds' => $socmeds,
        'contactcar' => $contactcar,
        'contactdetailing' => $contactdetailing,
        'banner' => $banner,
        'service1' => $service1,
        'service2' => $service2,
        'highlights' => $highlights,
        'brands' => $brands,
    ]);
});

Route::get('/gallery', function () {
    $address = FooterAddress::find(1);
    $socmeds = FooterSocmed::where('is_active', true)->get();
    $contactcar = FooterContactCar::find(1);
    $contactdetailing = FooterContactDetailling::find(1);
    return view('gallery.category.showroom', [
        'address' => $address,
        'socmeds' => $socmeds,
        'contactcar' => $contactcar,
        'contactdetailing' => $contactdetailing,
    ]);
});

Route::get('/gallery-showroom', function () {
    $address = FooterAddress::find(1);
    $socmeds = FooterSocmed::where('is_active', true)->get();
    $contactcar = FooterContactCar::find(1);
    $contactdetailing = FooterContactDetailling::find(1);
    return view('gallery.category.showroom', [
        'address' => $address,
        'socmeds' => $socmeds,
        'contactcar' => $contactcar,
        'contactdetailing' => $contactdetailing,
    ]);
});

Route::get('/gallery-caraudio', function () {
    $address = FooterAddress::find(1);
    $socmeds = FooterSocmed::where('is_active', true)->get();
    $contactcar = FooterContactCar::find(1);
    $contactdetailing = FooterContactDetailling::find(1);
    return view('gallery.category.caraudio', [
        'address' => $address,
        'socmeds' => $socmeds,
        'contactcar' => $contactcar,
        'contactdetailing' => $contactdetailing,
    ]);
});

Route::get('/gallery-autodetailing', function () {
    $address = FooterAddress::find(1);
    $socmeds = FooterSocmed::where('is_active', true)->get();
    $contactcar = FooterContactCar::find(1);
    $contactdetailing = FooterContactDetailling::find(1);
    return view('gallery.category.autodetailing', [
        'address' => $address,
        'socmeds' => $socmeds,
        'contactcar' => $contactcar,
        'contactdetailing' => $contactdetailing,
    ]);
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
Route::get('/dashboard/footer', [FooterDashboardController::class, 'index']);

    // Update address
    Route::post('/dashboard/footer/updateAddress/{id}', [FooterDashboardController::class, 'updateAddress']);

    //Add, Update, Activate, Delete Socmeds 
    Route::post('/dashboard/footer/addSocmeds/', [FooterDashboardController::class, 'addSocmeds']);
    Route::post('/dashboard/footer/updateSocmeds/{id}', [FooterDashboardController::class, 'updateSocmeds']);
    Route::get('/dashboard/footer/activateSocmeds/{id}', [FooterDashboardController::class, 'activateSocmeds']);
    Route::get('/dashboard/footer/deleteSocmeds/{id}', [FooterDashboardController::class, 'deleteSocmeds']);

    // Contact Car
    Route::post('/dashboard/footer/updateContactCar/{id}', [FooterDashboardController::class, 'updateContactCar']);

    // Contact auto
    Route::post('/dashboard/footer/updateContactAuto/{id}', [FooterDashboardController::class, 'updateContactAuto']);


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


// Dashboard Audio Controller
Route::get('/dashboard/audio', [AudioDashboardController::class, 'index']);

    // Add, Edit, Delete Carousel
    Route::post('/dashboard/audio/editBanner/{id}', [AudioDashboardController::class, 'updateBanner']);

    // Add, Edit, Delete Service
    Route::post('/dashboard/audio/editService/{id}', [AudioDashboardController::class, 'updateService']);

    // Add, Edit, Delete Highlight
    Route::post('/dashboard/audio/addHighlight', [AudioDashboardController::class, 'storeHighlight']);
    Route::post('/dashboard/audio/editHighlight/{id}', [AudioDashboardController::class, 'updateHighlight']);
    Route::get('/dashboard/audio/deleteHighlight/{id}', [AudioDashboardController::class, 'deleteHighlight']);

    // Add, Edit, Delete Brand
    Route::post('/dashboard/audio/addBrand', [AudioDashboardController::class, 'storeBrand']);
    Route::post('/dashboard/audio/editBrand/{id}', [AudioDashboardController::class, 'updateBrand']);
    Route::get('/dashboard/audio/deleteBrand/{id}', [AudioDashboardController::class, 'deleteBrand']);


// Dashboard auto Controller
Route::get('/dashboard/auto', [AutoDashboardController::class, 'index']);

    // Add, Edit, Delete Carousel
    Route::post('/dashboard/auto/editBanner/{id}', [AutoDashboardController::class, 'updateBanner']);

    // Add, Edit, Delete Service
    Route::post('/dashboard/auto/editService/{id}', [AutoDashboardController::class, 'updateService']);

    // Add, Edit, Delete Highlight
    Route::post('/dashboard/auto/addHighlight', [AutoDashboardController::class, 'storeHighlight']);
    Route::post('/dashboard/auto/editHighlight/{id}', [AutoDashboardController::class, 'updateHighlight']);
    Route::get('/dashboard/auto/deleteHighlight/{id}', [AutoDashboardController::class, 'deleteHighlight']);

    // Add, Edit, Delete Brand
    Route::post('/dashboard/auto/addBrand', [AutoDashboardController::class, 'storeBrand']);
    Route::post('/dashboard/auto/editBrand/{id}', [AutoDashboardController::class, 'updateBrand']);
    Route::get('/dashboard/auto/deleteBrand/{id}', [AutoDashboardController::class, 'deleteBrand']);

// Dashboard Gallery Controller
Route::get('/dashboard/gallery', [GalleryController::class, 'index']);

    // Add, Edit, Delete Gallery
    Route::post('/dashboard/gallery/addGallery', [GalleryController::class, 'storeGallery']);
    Route::post('/dashboard/gallery/editGallery/{id}', [GalleryController::class, 'updateGallery']);
    Route::get('/dashboard/gallery/deleteGallery/{id}', [GalleryController::class, 'deleteGallery']);

// Dashboard Profile Controller
Route::get('/dashboard/profile', [ProfileController::class, 'index']);

    // Add, Edit, Delete profile
    Route::post('/dashboard/profile/editProfile/{id}', [ProfileController::class, 'updateProfile']);