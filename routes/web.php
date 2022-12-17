<?php

use App\Http\Controllers\pendonorController;
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
    return view('welcome');
});

Route::prefix("pendonor")
    ->name("pendonor.")
    ->controller(pendonorController::class)
    ->group(function () {
        Route::get("/", "index")->name("list");
        Route::get('/show/{pendonor}', 'show')->name('show');
        Route::get('/edit/{pendonor}', 'edit')->name('edit');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{pendonor}', 'update')->name('update');
        Route::delete('/destroy/{pendonor}', 'destroy')->name('destroy');
    });
