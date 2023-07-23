<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\Auth\AuthController;
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/store', 'store')->name('store');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

use App\Http\Controllers\MahasiswaController;
Route::get('siswa', [MahasiswaController::class, 'index']);
Route::get('form-siswa', [MahasiswaController::class, 'create']);
Route::post('store-siswa', [MahasiswaController::class, 'store']);
Route::delete('/siswa/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('/siswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/update/{id}', [MahasiswaController::class, 'update'])->name('siswa.update');
