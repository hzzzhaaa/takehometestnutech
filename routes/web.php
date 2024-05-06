<?php

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::POST('/authenticate', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('authenticate');
Route::POST('/_register', [App\Http\Controllers\AuthController::class, '_register'])->name('_register');
Route::POST('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['AuthMiddleware']], function () {

});
Route::GET('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
    Route::GET('/produk', [App\Http\Controllers\DashboardController::class, 'produk'])->name('produk');
    Route::get('/tambahproduk', [App\Http\Controllers\DashboardController::class, 'tambahproduk'])->name('tambahproduk');
    Route::POST('/_tambahproduk', [App\Http\Controllers\DashboardController::class, '_tambahproduk'])->name('_tambahproduk');
    Route::post('/deleteProduk/{id}', [App\Http\Controllers\DashboardController::class, 'deleteProduk'])->name('deleteProduk');


Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
