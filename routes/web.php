<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/presentation', function () {
    return 'page de presentation';
})->name('presentation');

Route::get('/services', function () {
    return 'page du services';
})->name('service.index');

Route::get('/service-a-domicile', function () {
    return 'page service a domicile';
})->name('service.domicile');

Route::get('/nos-avantages', function () {
    return 'page de nos avantages';
})->name('advantages');

Route::get('/contact', function () {
    return 'page de contact';
})->name('contact');

Route::get('/mentions-legales', function () {
    return 'page de mentions legales';
})->name('legal.mentions');
