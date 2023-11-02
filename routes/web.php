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

Route::get('/about', function () {
    return view('about');
})->name("about");      
Route::get('/contact', function () {
    return view('contact');
})->name("contact");
Route::get('/', function () {
    return view('index');
})->name("index");
Route::get('/service', function () {
    return view('service');
})->name("service");
Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");
Route::get('/team', function () {
    return view('team');
})->name("team");