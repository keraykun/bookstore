<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
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


Auth::routes();

Route::get('/test', [HomeController::class, 'test'])->name('test');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/genre/{book}/{name}', [HomeController::class, 'genre'])->name('genre.genre');
Route::get('/book/{book}/{name}', [HomeController::class, 'show'])->name('genre.show');


Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('user/list', [UserController::class, 'list'])->name('user.list');

Route::get('admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard')->middleware('is_admin');
Auth::routes();



