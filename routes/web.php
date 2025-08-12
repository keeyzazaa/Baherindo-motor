<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::resource('/', WelcomeController::class);
Route::resource('about', AboutController::class);
Route::resource('contact', ContactController::class);
Route::resource('form', FormController::class);
Route::resource('motor', MotorController::class);
Route::resource('mobil', MobilController::class);
