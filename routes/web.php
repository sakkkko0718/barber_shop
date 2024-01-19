<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ReservationController;
use App\Models\Content;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

//管理者用ログインのuse宣言
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegisterController;

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
Route::post('/guests/add',[GuestController::class,'create'])->name('guestCreate');

//メニュー
Route::get('/contents', [ContentController::class, 'index'])->name('index');
Route::get('/reservations',[ReservationController::class,'index']);
//ミドルウェアを使ってログインを必須の状態にする→ログインが完了すると自動的に予約画面にいく
Route::get('reservations/add/{content_id}',[ReservationController::class,'content_get'])->middleware('auth')->name('contentget');
Route::post('reservations/add',[ReservationController::class,'show']);
Route::get('reservations/add',[ReservationController::class,'add']);
Route::post('reservations/complete',[ReservationController::class,'store'])->name('reservationsStore');

Auth::routes();

//ログイン機能
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    // 登録
    Route::get('register', [AdminRegisterController::class, 'create'])
        ->name('admin.register');

    Route::post('register', [AdminRegisterController::class, 'store']);

    // ログイン
    Route::get('login', [AdminLoginController::class, 'showLoginPage'])
        ->name('admin.login');

    Route::post('login', [AdminLoginController::class, 'login']);

    // 以下の中は認証必須のエンドポイントとなる
    Route::middleware(['auth:admin'])->group(function () {
        // ダッシュボード
        // ログインしないとみられない設定（middleware）
        Route::get('dashboard', fn() => view('admin.dashboard'))
            ->name('admin.dashboard');
    });
});