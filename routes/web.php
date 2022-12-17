<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
        Route::get('/show/{pendonor}', 'show')->name('show')->middleware(['withAuth']);
        Route::get('/edit/{pendonor}', 'edit')->name('edit')->middleware(['withAuth']);
        Route::get('/kesehatan/{pendonor}', 'kesehatan')->name('kesehatan')->middleware(['withAuth']);
        Route::get('/create', 'create')->name('create')->middleware(['withAuth']);
        Route::post('/store', 'store')->name('store')->middleware(['withAuth']);
        Route::put('/update/{pendonor}', 'update')->name('update')->middleware(['withAuth']);
        Route::delete('/destroy/{pendonor}', 'destroy')->name('destroy')->middleware(['withAuth']);
    });

Route::prefix("admin")
    ->name("admin.")
    ->controller(AdminController::class)
    ->middleware(['withAuth'])
    ->group(function () {
        Route::get("/", "index")->name("list");
        Route::get('/show/{admin}', 'show')->name('show');
        Route::get('/edit/{admin}', 'edit')->name('edit');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::put('/update/{admin}', 'update')->name('update');
        Route::delete('/destroy/{admin}', 'destroy')->name('destroy');
    });

Route::any('/login', [AuthController::class, 'login'])->name('login')->middleware(['noAuth']);
Route::any('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(['withAuth']);
