<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/settings', 'settings')->name('settings');