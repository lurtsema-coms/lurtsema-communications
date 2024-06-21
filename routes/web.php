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

Route::get('/about-us', function () {
    $data = [];
    $data['team'] = [
        [
            'name' => 'Joe Lurtsema',
            'title' => 'CEO/FOUNDER',
            'img_link' => '',
            'linked_in' => null,
        ],
        [
            'name' => 'Jubie Nebalga',
            'title' => 'Director of Marketing & Sales',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/jubie-nebalga-75b99020a/',
        ],
        [
            'name' => 'Shaine Agonia',
            'title' => 'Senior Communications Manager',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/shaineagonia/',
        ],
        [
            'name' => 'Irene Martinez',
            'title' => 'Executive Assistant',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/irene-martinez-354353194/',
        ],
        [
            'name' => 'Heaven Limin',
            'title' => 'Creative Designer',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/christian-heaven-limin-334241205/',
        ],
        [
            'name' => 'Joseph Daquioag',
            'title' => 'Video Editor',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/joseph-daquioag-a24a8323b/',
        ],
        [
            'name' => 'Manny Dagondon',
            'title' => 'Junior Graphic Designer',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/manny-lloyd-dagondon-72505873/',
        ],
        [
            'name' => 'Fillinor Gunio',
            'title' => 'Full Stack Web Developer',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/fillinor-gunio-57347a137/',
        ],
        [
            'name' => 'Gabriel Quing',
            'title' => 'Full Stack Web Developer',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/gabriel-camerone-quing-1b849b24b/',
        ],
        [
            'name' => 'Patrick Punzalan',
            'title' => 'Full Stack Web Developer',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/patrick-lester-punzalan-077546243/',
        ],
        [
            'name' => 'Jed Vargas',
            'title' => 'Junior Creative Designer',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/',
        ],
        [
            'name' => 'Denise Bautista',
            'title' => 'Junior Copywriter',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/denisebautista20031213/',
        ],
        [
            'name' => 'Regina Villa',
            'title' => 'Bookkeeper & Accountant',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/regina-s-vila-7154421a0/',
        ],
        [
            'name' => 'Joanna Persia',
            'title' => 'Sales Associate',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/joanna-marrie-persia-960713267/',
        ],
        [
            'name' => 'Magilyn Lopez',
            'title' => 'Digital Marketing Specialist',
            'img_link' => '',
            'linked_in' => 'https://www.linkedin.com/in/magilyn-lopez-3339441b2/',
        ],
    ];
    return view('about-us', $data);
})->name('about-us');

Route::get('terms', function () {
    return view('terms');
})->name('terms');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
