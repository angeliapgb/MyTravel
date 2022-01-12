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
Route::get('/detailplace/{name}', [PageController::class, 'detailplace'])->name('detailplace');
Route::post('/detailplace/{name}', [PageController::class, 'book'])->name('book');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::post('/profile', [PageController::class, 'upload'])->name('profile');
Route::get('/booking', [PageController::class, 'booking'])->name('booking');
Route::get('/history', [PageController::class, 'history'])->name('history');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/auth/redirect', [App\Http\Controllers\Auth\LoginController::class,'redirectToProvider']);
Route::get('/auth/callback', [App\Http\Controllers\Auth\LoginController::class,'handleProviderCallback']);
