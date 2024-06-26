<?php

use App\Http\Controllers\AppController;
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

Route::get('/', [AppController::class, 'home'])->name('home');

Route::get('/about-us', [AppController::class, 'aboutUs'])->name('about-us');

Route::get('terms', function () {
    return view('terms');
})->name('terms');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
