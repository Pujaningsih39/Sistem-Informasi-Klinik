<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PegawaiController;


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
    return view('v_home');
});

// -----------------------------------ROUTE USER-----------------------------------
Route::get('/users', [UsersController::class, 'index'])->name('users_klinik');
Route::get('/users/add', [UsersController::class, 'add']);
Route::post('/users/tambah', [UsersController::class, 'tambah']);
Route::get('/users/detail/{id}', [UsersController::class, 'detail']);
Route::get('/users/edit/{id}', [UsersController::class, 'edit']);
Route::post('/users/update/{id}', [UsersController::class, 'update']);
Route::get('/users/delete/{id}', [UsersController::class, 'delete']);

// -----------------------------------ROUTE PEGAWAI-----------------------------------
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai/add', [PegawaiController::class, 'add']);
Route::post('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/detail/{id}', [PegawaiController::class, 'detail']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete']);


// // ------------------------------- ROUTE LOGIN -------------------------------
// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// // ------------------------------- ROUTE LOGOUT -------------------------------
// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// //Route::post('/login', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('/logout', [LoginController::class, 'actionlogout'])->name('logout');
