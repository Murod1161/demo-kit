<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;

Route::get('/', [BrandController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::view('/it-consulting', 'pages.it-consulting')->name('it-consulting');
Route::view('/contact-us', 'pages.contact-us')->name('contact-us');
Route::view('/start-cooperation', 'pages.start-cooperation')->name('start-cooperation');
Route::view('/colocation', 'pages.colocation')->name('colocation');
