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

Route::get('/masters',[MasterController::class,'index']);

Route::get('/guests',[GuestController::class,'index']);

//メニュー
Route::get('/contents', [ContentController::class, 'index']);
Route::post('/contents/add', [ContentController::class, 'addToCart'])->name('addToCart');
Route::get('/contents/add/{contentId}', [ContentController::class, 'showCart'])->name('showCart');

//予約確認ページ（ゲストと予約の情報）
Route::get('/reservations',[ReservationController::class,'index']);

//予約ページ（メニューから予約へ移動）
// Route::get('/reservations/add',[ReservationController::class,'add'])->name('add');
//middleware追加でログインすることを必須にする。（今はちょっと邪魔なのでコメントアウト）
// ->middleware('auth');
// Route::post('/reservations/add',[ReservationController::class,'create']);

Auth::routes();

//ログイン機能
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
