<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContentController; // Add this line

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminContentController::class, 'index'])->name('admin.index'); // Update this line
    Route::post('/update', [AdminContentController::class, 'update'])->name('admin.update'); // Update this line
    Route::post('/upload', [AdminContentController::class, 'uploadImage'])->name('admin.upload');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');