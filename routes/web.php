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

Route::get('/', [\App\Http\Controllers\Temperature\IndexController::class, 'showForm']);

Route::prefix('temperature')->group(function () {
    Route::post('/add', [\App\Http\Controllers\Temperature\AddController::class, 'make'])->name('makeTemperature');
    Route::get('/{temperatureID}', [\App\Http\Controllers\Temperature\GetController::class, 'details'])->name('details');
});
