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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])->name('guest.index');
Route::get('/tanya', [App\Http\Controllers\GuestController::class, 'tanya'])->name('guest.tanya');
Route::post('/tanya/buat', [App\Http\Controllers\GuestController::class, 'buat'])->name('guest.tanya.buat');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/terjawab', [App\Http\Controllers\AdminController::class, 'terjawab'])->name('admin.terjawab');
Route::get('/admin/belum', [App\Http\Controllers\AdminController::class, 'belum'])->name('admin.belum');
Route::get('/admin/cari', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.cari');
Route::get('/admin/detail/{id}', [App\Http\Controllers\AdminController::class, 'detail'])->name('admin.detail');
Route::get('/admin/inactive/{id}', [App\Http\Controllers\AdminController::class, 'inActive'])->name('admin.inactive');
Route::post('/admin/tanya/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.tanya.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
