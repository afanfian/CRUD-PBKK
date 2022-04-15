<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbsdController;
use App\Models\ppdbsd;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/list-data-sd', function () {
    return view('list-data-sd');
});

Route::group(['prefix' => 'ppdbsd', 'as' => 'ppdbsd.'], function () {
    Route::get('/', [PpdbsdController::class, 'index'])->name('home');
});
// Route menampilkan home
Route::get('/', [PpdbsdController::class, 'index'])->name('home');
// Tmabah Data dan ngecreate data pada ppdbsd controller
// Buat Data dan ngestore data pada ppdbsd controller
Route::get('/buat', [PpdbsdController::class, 'create'])->name('ppdbsd.tambah-data');
Route::post('/buat-data', [PpdbsdController::class, 'store'])->name('ppdbsd.buat-data');
// Edit data dan ngedit data pada ppdbsd controller
Route::get('/edit/{id}', [PpdbsdController::class, 'edit'])->name('ppdbsd.edit');
Route::post('/update/{id}', [PpdbsdController::class, 'update'])->name('ppdbsd.update');

// Delete
Route::delete('/delete/{id}', [PpdbsdController::class, 'destroy'])->name('ppdbsd.destroy');

// Detail
Route::get('/detail/{id}', [PpdbsdController::class, 'show'])->name('ppdbsd.show');
