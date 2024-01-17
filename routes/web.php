<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ReservationController;
use App\Models\Content;
use App\Models\Reservation;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/top',function(){
    return view('top');
});

Route::get('/access',function(){
    return view('access');
});

Route::get('/masters',[MasterController::class,'index']);

Route::get('/guests',[GuestController::class,'index']);
Route::get('/guests/add',[GuestController::class,'add']);
Route::post('/guests/add',[GuestController::class,'create']);

//メニュー
Route::get('/contents', [ContentController::class, 'index'])->name('index');
Route::get('/reservations',[ReservationController::class,'index']);
Route::get('reservations/add/{content_id}',[ReservationController::class,'content_get'])->name('contentget');
Route::post('reservations/add',[ReservationController::class,'show']);
Route::get('reservations/add',[ReservationController::class,'add']);
Route::post('reservations/complete',[ReservationController::class,'store'])->name('reservationsStore');

Auth::routes();

//ログイン機能
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
