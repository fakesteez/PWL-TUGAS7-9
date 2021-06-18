<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

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
    return view('welcome');
});
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('mahasiswa/search/data', [MahasiswaController::class, 'search'])->name('mahasiswa.search');
Route::get('mahasiswa/nilai/{nim}', [MahasiswaController::class,'nilai'])->name('mahasiswa.nilai');