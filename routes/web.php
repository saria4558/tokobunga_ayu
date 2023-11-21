<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\ProfilController;
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

Route::get('/', function () {
    return view('index');
});
// Route::get('/login', [BungaController::class, 'masuk'])-> name('masuk');
// Route::get('/register', [BungaController::class, 'daftarView']);
// Route::post('/register', [BungaController::class, 'store']);
// Route::get('/product', [BungaController::class, 'product'])->name('product');

// Route::get('/tambah', [BungaController::class, 'tambah'] )->name('tambah');
// Route::post('/insert', [BungaController::class, 'insert'] )->name('insert');
// Route::get('/tampilkandata/{id}', [BungaController::class, 'updatedata'] )->name('tampilkandata');
// Route::post('/updatedata/{id}', [BungaController::class, 'updatedata'] )->name('updatedata');

Route::get('/', [BungaController::class, 'index'])->name('index');
Route::get('/product', [BungaController::class, 'product'])->name('product');
Route::get('/login', [BungaController::class, 'masuk'])-> name('masuk');
// Route::post('/login', [BungaController::class, 'masuk'])-> name('masuk');
// Route::get('/login', [BungaController::class, 'login']);
Route::get('/masuk', [BungaController::class, 'masuk'])->name('masuk');
Route::get('/register', [BungaController::class, 'daftarView'])->name('register');
Route::post('/register', [BungaController::class, 'store']);
Route::get('/forgot-password', [BungaController::class, 'forgotpassword']);
Route::get('/tambah', [BungaController::class, 'tambah'])->name('tambah');
// Route::get('/logout', [BungaController::class, 'logout'])->name('logout');
Route::post('/insert', [BungaController::class, 'insert']);
Route::get('/tampilkandata/{id}', [BungaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [BungaController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [BungaController::class, 'deletedata'] )->name('deletedata');

Route::post('/checklogin', [BungaController::class, 'checklogin'])->name('checklogin');
Route::get('/main/successlogin', [BungaController::class, 'successlogin']);
Route::get('/logout',  [BungaController::class, 'logout']);

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::post('/profil{user?}', [ProfilController::class, 'update'])->name('profil.update');






