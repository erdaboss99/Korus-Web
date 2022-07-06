<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChoirController;

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
    return view('welcome');
});

Route::get('/korus', function () {
    return view('pages/choir');
});

Route::get('/rolunk', function () {
    return view('pages/aboutus');
});

Route::get('/kapcsolat', function () {
    return view('pages/contact');
});
