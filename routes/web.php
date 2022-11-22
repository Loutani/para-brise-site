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
});

Route::get('/presentation', function () {
    return 'page de presentation';
});

Route::get('/services', function () {
    return 'page du services';
});

Route::get('/service-a-domicile', function () {
    return 'page service a domicile';
});

Route::get('/nos-avantages', function () {
    return 'page de nos avantages';
});

Route::get('/contact', function () {
    return 'page de contact';
});

Route::get('/mentions-legales', function () {
    return 'page de mentions legales';
});
