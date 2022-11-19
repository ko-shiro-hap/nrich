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

// サークル
Route::resource('/circle', App\Http\Controllers\CircleController::class);

// ログアウト
Route::get('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

// 管理者用認証機能
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login']);
Route::get('/admin/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout']);

// Admin
Route::resource('/admin', App\Http\Controllers\Admin\IndexController::class)->middleware('administrator.auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';