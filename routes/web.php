<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BTSController;
use App\Http\Controllers\FAQController;

Route::get('/', function () {
	return view('app.home');
})->name('home');

Route::get('bts', [BTSController::class, 'index'])->name('bts');
Route::post('bts', [BTSController::class, 'store'])->name('bts.post');

Route::get('faq', [FAQController::class, 'index'])->name('faq');
Route::post('faq', [FAQController::class, 'store'])->name('faq.post');
