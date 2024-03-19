<?php

use App\Http\Controllers\CodeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\materiController;
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
});
Route::post('/code/store', [CodeController::class, 'store']);


Route::get('/asisten/asistenpage', [DataController::class, 'asistenpage'])->name('asistenpage');
Route::get('/kelas/kelaspage', [kelasController::class, 'kelaspage'])->name('kelaspage');
Route::get('/destroy', [kelasController::class, 'destroyKelas'])->name('destroyKelas');
Route::get('/edit', [kelasController::class, 'edit'])->name('editKelas');
Route::get('/store', [kelasController::class, 'store'])->name('store');

// Route::resource('materipage', materiController::class);
Route::get('materipage', [MaterialController::class, 'materipage'])->name('materipage');
Route::post('/edit', [MaterialController::class, 'editmateri'])->name('editmateri');
// Route::get('/materi', [MaterialController::class, 'materi'])->name('materi');


// Route::get('/datakelas/index', [ClasController::class, 'index'])->name('indexKelas');
// Route::post('/datakelas/post', [ClasController::class, 'store'])->name('storeKelas');
// Route::post('/datakelas/edit', [ClasController::class, 'edit'])->name('editKelas');
// Route::post('/datakelas/update', [ClasController::class, 'update'])->name('updateKelas');
// Route::get('/datakelas/delete/{id}', [ClasController::class, 'destroy'])->name('destroyKelas');

// Route::get('/datakelas/index', [kelasController::class, 'index'])->name('indexKelas');
// Route::post('/datakelas/post', [kelasController::class, 'store'])->name('storeKelas');
// Route::post('/datakelas/edit', [kelasController::class, 'edit'])->name('editKelas');
// Route::post('/datakelas/update', [kelasController::class, 'update'])->name('updateKelas');
// Route::get('/datakelas/delete/{id}', [kelasController::class, 'destroy'])->name('destroyKelas');





