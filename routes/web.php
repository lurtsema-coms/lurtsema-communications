<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Finder\Finder;

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

Route::get('/', function () {
    $data = [];

    $data['businessLogos'] = (new Finder())
        ->files()
        ->in(public_path('images/all-business-clients'))
        ->depth('== 0')
        ->name('*.jpg')
        ->name('*.jpeg')
        ->name('*.png')
        ->name('*.gif')
        ->name('*.bmp');

    $data['politicalLogos'] = (new Finder())
        ->files()
        ->in(public_path('images/all-political-clients'))
        ->depth('== 0')
        ->depth('== 0')
        ->name('*.jpg')
        ->name('*.jpeg')
        ->name('*.png')
        ->name('*.gif')
        ->name('*.bmp');

    return view('home', $data);
});

Route::get('terms', function () {
    return view('terms');
})->name('terms');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
