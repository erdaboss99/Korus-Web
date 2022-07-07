<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChoirController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;

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

Route::get('/', [ChoirController::class, 'index']);
Route::get('/rolunk', [ChoirController::class, 'index']);
Route::get('/galeria', [GalleryController::class, 'listGallery']);
Route::get('/galeria/{id}', [GalleryController::class, 'showGallery']);

Route::get('/hirfolyam', [PostController::class, 'show']);
Route::get('/hirfolyam/letrehoz', [PostController::class, 'create'])->name('createPost');


Route::get('/kapcsolat', function () {
    return view('pages/contact');
});

Route::get('/ersek', function () {
    return view('pages/profiles/ersek');
});

Route::get('/szilvia', function () {
    return view('pages/profiles/szilvia');
});

Route::get('/hhm', function () {
    return view('pages/profiles/hhm');
});

Route::get('/korus', function () {
    return view('pages/profiles/choir');
});
