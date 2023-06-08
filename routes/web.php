<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BTSController;

Route::get('/', function () {
	return view('app.home');
})->name('home');

Route::get('bts', [BTSController::class, 'index'])->name('bts');
Route::post('bts', [BTSController::class, 'store'])->name('bts.post');

Route::get('faq', function () {
	return view('app.faq');
})->name('faq');
