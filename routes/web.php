<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [PageController::class, 'deleteplace'])->name('deleteplace');

Route::get('/detailplace/{name}', [PageController::class, 'detailplace'])->name('detailplace');
Route::post('/detailplace/{name}', [PageController::class, 'bookingform'])->name('bookingform');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::post('/profile', [PageController::class, 'upload'])->name('profile');

Route::get('/booking', [PageController::class, 'booking'])->name('booking');

Route::get('/bookingdata', [PageController::class, 'bookingdata'])->name('bookingdata');
Route::post('/bookingdata', [PageController::class, 'bookingform'])->name('bookingform');
Route::post('/bookingdata', [PageController::class, 'bookingconfirmation'])->name('bookingconfirmation');

Route::get('/updateplace/{name}', [PageController::class, 'updateplace'])->name('updateplace');
Route::post('/updateplace/{name}', [PageController::class, 'updateplace'])->name('updateplace');
Route::post('/updateplace/{name}', [PageController::class, 'updateconfirmation'])->name('updateconfirmation');

Route::get('/addplace', [PageController::class, 'addplace'])->name('addplace');
Route::post('/addplace', [PageController::class, 'addplaceinfo'])->name('addplaceinfo');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/auth/redirect', [App\Http\Controllers\Auth\LoginController::class,'redirectToProvider']);
Route::get('/auth/callback', [App\Http\Controllers\Auth\LoginController::class,'handleProviderCallback']);
