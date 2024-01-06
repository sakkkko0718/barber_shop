<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masters',[MasterController::class,'index']);

Route::get('/guests',[GuestController::class,'index']);

Route::get('/contents',[ContentController::class,'index']);

Route::get('/reservations',[ReservationController::class,'index']);