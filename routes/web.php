<?php

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




Auth::routes();
Route::get('/', function() {
    return view('open');
})->name('open')->middleware('auth');



Auth::routes();
Route::get('/newproject', function() {
    return view('newproject');
})->name('newproject')->middleware('auth');



Auth::routes();
Route::get('/home', function() {
    return view('open');
})->name('open')->middleware('auth');


Auth::routes();
Route::get('/open', function() {
    return view('open');
})->name('open')->middleware('auth');








