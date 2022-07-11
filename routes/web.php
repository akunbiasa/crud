<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PdfController;
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



Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/register', [RegisterController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);
Route::get('/list', [ListController::class,'index'])->name('list');
Route::get('/list', [ListController::class,'list'])->name('list');
// Route::get('/list/cari', [ListController::class,'cari']);


Route::get('/tampilkandata/{id}', [ListController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/editdata/{id}', [ListController::class,'editdata'])->name('editdata');

Route::get('/hapusdata/{id}', [ListController::class,'hapusdata'])->name('hapusdata');

// export PDF
Route::get('/pdf', [PdfController::class,'index'])->name('pdf');
Route::get('/exportpdf', [ListController::class,'exportpdf'])->name('exportpdf');




