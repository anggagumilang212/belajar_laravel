<?php

use App\Http\Controllers\SiswaController;
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
    return view('home');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/siswa', [SiswaController::class, 'tampil']); //menampilkan function dengan nama tampil pada SiswaController
Route::post('/tambah-siswa', [SiswaController::class, 'store']);
Route::post('/edit-siswa', [SiswaController::class, 'edit']);
