<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\WelcomeCardController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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
