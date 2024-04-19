<?php


use Illuminate\Support\Facades\Route;



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