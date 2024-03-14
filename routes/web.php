<?php

use App\Http\Controllers\CodeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\cekRole;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/registrasi', [loginController::class, 'registrasi'])->name('registraasi');
Route::post('/newdata', [UserController::class, 'newdata'])->name('newdata');
Route::get('/login', [loginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [loginController::class, 'postlogin'])->name('postlogin');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('/code')->middleware(['cekRole:Admin', 'cekRole:Pj', 'cekRole:Staff'])->group(function () {
    Route::get('/', [CodeController::class, 'index'])->name('indexCode');
    Route::get('/store', [CodeController::class, 'store'])->name('storeKode');
});


Route::get('/asistenpage', [DataController::class, 'asistenpage'])->name('asistenpage');


// Route::get('data/asisten/index.php', '@index')->name('data.asisten.index');

// Route::post('/logout', [logoutController::class, 'logout'])->name('logout');

