<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CasinoEventController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\FactSheetController;
use App\Http\Controllers\HouseRuleController;
use App\Http\Controllers\WelcomeCardController;
use App\Http\Controllers\ManualsController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // route template
    // Route::get('/', [Controller::class, 'index'])->name('.index');
    // Route::get('//create', [Controller::class, 'create'])->name('.create');
    // Route::post('/', [Controller::class, 'store'])->name('.store');
    // Route::get('//{}/edit', [Controller::class, 'edit'])->name('.edit');
    // Route::put('//{}/update', [Controller::class, 'update'])->name('.update');
    // Route::delete('//{}/destroy', [Controller::class, 'destroy'])->name('.destroy');



    // route carousel CRUD ADMIN
    Route::get('/carousel', [CarouselController::class, 'index'])->name('carousel.index');
    Route::get('/carousel/create', [CarouselController::class, 'create'])->name('carousel.create');
    Route::post('/carousel', [CarouselController::class, 'store'])->name('carousel.store');
    Route::get('/carousel/{carousel}/edit', [CarouselController::class, 'edit'])->name('carousel.edit');
    Route::put('/carousel/{carousel}/update', [CarouselController::class, 'update'])->name('carousel.update');
    Route::delete('/carousel/{carousel}/destroy', [CarouselController::class, 'destroy'])->name('carousel.destroy');

    // route welcome card CRUD ADMIN
    Route::get('/welcomecard', [WelcomeCardController::class, 'index'])->name('welcomecard.index');
    Route::get('/welcomecard/create', [WelcomeCardController::class, 'create'])->name('welcomecard.create');
    Route::post('/welcomecard', [WelcomeCardController::class, 'store'])->name('welcomecard.store');
    Route::get('/welcomecard/{welcomecard}/edit', [WelcomeCardController::class, 'edit'])->name('welcomecard.edit');
    Route::put('/welcomecard/{welcomecard}/update', [WelcomeCardController::class, 'update'])->name('welcomecard.update');
    Route::delete('/welcomecard/{welcomecard}/destroy', [WelcomeCardController::class, 'destroy'])->name('welcomecard.destroy');

    // route Featured CRUD ADMIN
    Route::get('/featured', [FeaturedController::class, 'index'])->name('featured.index');
    Route::get('/featured/create', [FeaturedController::class, 'create'])->name('featured.create');
    Route::post('/featured', [FeaturedController::class, 'store'])->name('featured.store');
    Route::get('/featured/{featured}/edit', [FeaturedController::class, 'edit'])->name('featured.edit');
    Route::put('/featured/{featured}/update', [FeaturedController::class, 'update'])->name('featured.update');
    Route::delete('/featured/{featured}/destroy', [FeaturedController::class, 'destroy'])->name('featured.destroy');

    
    // route casino events
    Route::get('/casinoevent', [CasinoEventController::class, 'index'])->name('casinoevent.index');
    Route::get('/casinoevent/create', [CasinoEventController::class, 'create'])->name('casinoevent.create');
    Route::post('/casinoevent', [CasinoEventController::class, 'store'])->name('casinoevent.store');
    Route::get('/casinoevent/{casinoevent}/edit', [CasinoEventController::class, 'edit'])->name('casinoevent.edit');
    Route::put('/casinoevent/{casinoevent}/update', [CasinoEventController::class, 'update'])->name('casinoevent.update');
    Route::delete('/casinoevent/{casinoevent}/destroy', [CasinoEventController::class, 'destroy'])->name('casinoevent.destroy');

    
    //route fact sheet
    Route::get('/factsheet', [FactSheetController::class, 'index'])->name('factsheet.index');
    Route::get('/factsheet/create', [FactSheetController::class, 'create'])->name('factsheet.create');
    Route::post('/factsheet', [FactSheetController::class, 'store'])->name('factsheet.store');
    Route::get('/factsheet/{fact_sheets}/edit', [FactSheetController::class, 'edit'])->name('factsheet.edit');
    Route::put('/factsheet/{fact_sheets}/update', [FactSheetController::class, 'update'])->name('factsheet.update');
    Route::delete('/factsheet/{fact_sheets}/destroy', [FactSheetController::class, 'destroy'])->name('factsheet.destroy');

    //route house rules
    Route::get('/houserules', [HouseRuleController::class, 'index'])->name('houserules.index');
    Route::get('/houserules/create', [HouseRuleController::class, 'create'])->name('houserules.create');
    Route::post('/houserules', [HouseRuleController::class, 'store'])->name('houserules.store');
    Route::get('/houserules/{houserules}/edit', [HouseRuleController::class, 'edit'])->name('houserules.edit');
    Route::put('/houserules/{houserules}/update', [HouseRuleController::class, 'update'])->name('houserules.update');
    Route::delete('/houserules/{houserules}/destroy', [HouseRuleController::class, 'destroy'])->name('houserules.destroy');

    //route manuals
    Route::get('/manuals', [ManualsController::class, 'index'])->name('manuals.index');
    Route::get('/manuals/create', [ManualsController::class, 'create'])->name('manuals.create');
    Route::post('/manuals', [ManualsController::class, 'store'])->name('manuals.store');
    Route::get('/manuals/{manuals}/edit', [ManualsController::class, 'edit'])->name('manuals.edit');
    Route::put('/manuals/{manuals}/update', [ManualsController::class, 'update'])->name('manuals.update');
    Route::delete('/manuals/{manuals}/destroy', [ManualsController::class, 'destroy'])->name('manuals.destroy');



    //profile CRUD ADMIN
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('home');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/board', function () {
    return view('board');
});
Route::get('/circulars', function () {
    return view('circulars');
});
Route::get('/club_events', function () {
    return view('club_events');
});
Route::get('/fact_sheet', function () {
    return view('fact_sheet');
});
Route::get('/function_rooms', function () {
    return view('function_rooms');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/house_rules', function () {
    return view('house_rules');
});
Route::get('/management_team', function () {
    return view('management_team');
});
Route::get('/manual', function () {
    return view('manual');
});
Route::get('/member_login', function () {
    return view('member_login');
});
Route::get('/membership', function () {
    return view('membership');
});
Route::get('/promotions', function () {
    return view('promotions');
});
Route::get('/restaurant_outlets', function () {
    return view('restaurant_outlets');
});
Route::get('/sports', function () {
    return view('sports');
});
Route::get('/vision_mission', function () {
    return view('vision_mission');
});
Route::get('/developers', function () {
    return view('developers');
});
Route::get('/chef', function () {
    return view('chef');
});
Route::get('/monthly_promo', function () {
    return view('monthly_promo');
});
Route::get('/admin-panel', function () {
    return view('admin-panel');
});
