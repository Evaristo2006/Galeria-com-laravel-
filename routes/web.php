<?php

use App\Http\Controllers\GaleriaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/galeraia', function () {
    return view('welcome');
});

Route::get('/', [ GaleriaController::class, 'index'] )->name('gallery.index');
Route::get('/upload', [GaleriaController::class, 'create'] )->name('gallery.create');
Route::Post('/upload', [GaleriaController::class, 'store'] )->name('gallery.store');

