<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;


//landing page landing page
//landing page landing page
//landing page landing page
Route::get('/', [HomeController::class, 'landing'])->name('landing');



// auth auth auth
// auth auth auth
// auth auth auth
route::get('/home',  [AdminController::class, 'index'])->middleware('auth')->name('home');




// user user user
// user user user
// user user user
// user user user
Route::get('/', [HomeController::class, 'landing'])->name('landing');

Route::get('/utama', [HomeController::class, 'utama'])->name('utama');

Route::get('/teknolog', [HomeController::class, 'teknologi'])->name('teknologi');

Route::get('/politik', [HomeController::class, 'politik'])->name('politik');

Route::get('/olahraga', [HomeController::class, 'olahraga'])->name('olahraga');

Route::get('/hiburan', [HomeController::class, 'hiburan'])->name('hiburan');

Route::get('/dunia', [HomeController::class, 'dunia'])->name('dunia');

Route::get('/kriminal', [HomeController::class, 'kriminal'])->name('kriminal');

Route::get('/tampilkan_buat_berita', [HomeController::class, 'buat_berita'])->name('buat_berita');

Route::post('/buat_berita', [HomeController::class, 'store'])->name('store');



// berita berita berita
// berita berita berita
// berita berita berita
Route::get('/berita/{id}', [HomeController::class, 'detail'])->name('detail');



//admin admin admin
//admin admin admin
//admin admin admin
route::get('/post',  [AdminController::class, 'post'])->middleware('auth','admin');

route::get('/akun',  [AdminController::class, 'akun'])->middleware('auth','admin')->name('akun');

route::get('/tambah',  [AdminController::class, 'tambah'])->middleware('auth','admin')->name('tambah');

route::post('/admin/store_post',[AdminController::class, 'store'])->middleware('auth','admin');

Route::get('/akun/{id}/edit_akun', [AdminController::class, 'edit_page'])->middleware('auth', 'admin')->name('edit');

Route::put('/akun/{id}', [AdminController::class, 'update_akun'])->middleware('auth', 'admin')->name('edit.update');

Route::delete('/akun/{id}', [AdminController::class, 'delete_post'])->middleware('auth', 'admin')->name('posts.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
