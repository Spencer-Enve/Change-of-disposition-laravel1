<?php

use App\Http\Controllers\RimFirstController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;

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
    return view('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/choose-product-type', function () {
    return view('choose-product-type');
})->name('choose-product-type');

Route::middleware(['auth:sanctum', 'verified'])->get('/rims-change-of-disposition', function () {
    return view('rims-change-of-disposition');
})->name('rims-change-of-disposition');

Route::middleware(['auth:sanctum', 'verified'])->get('/small-parts-change-of-disposition', function () {
    return view('small-parts-change-of-disposition');
})->name('small-parts-change-of-disposition');

Route::middleware(['auth:sanctum', 'verified'])->get('/frame-change-of-disposition', function () {
    return view('frame-change-of-disposition');
})->name('frame-change-of-disposition');

Route::middleware(['auth:sanctum', 'verified'])->get('/rim-first', function () {
    return view('rim-first');
})->name('rim-first');

Route::resource('rim-first', RimFirstController::class);

Route::post('rims-change-of-disposition', 'SubmissionController@store');

Route::resource('rims-change-of-disposition', SubmissionController::class);










