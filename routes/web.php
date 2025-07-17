<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;

Route::get('/', [BrandController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::view('/it-consulting', 'pages.it-consulting')->name('it-consulting');
