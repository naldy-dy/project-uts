<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;


	
Route::get('/', [IndexController:: class, 'show']);
Route::get('index', [IndexController:: class, 'showIndex']);
Route::get('detail/{detail}', [IndexController:: class, 'showDetail']);





// Auth-----------------------

Route::get('login',[AuthController:: class, 'showLogin'])->name('login');
Route::post('login', [AuthController:: class, 'loginProcess']);
Route::get('logout', [AuthController:: class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register',[AuthController:: class, 'registerProsess']);

Route::get('logout',[AuthController:: class, 'logout']);



Route::prefix('admin')->middleware('auth')->group(function(){
	// konten-----------------------
	Route::resource('konten',KontenController:: class);
	// kategori----------------------------
	Route::resource('kategori',KategoriController:: class);

		// admin----------------------------------
	Route::get('beranda', [HomeController:: class, 'showBeranda']);
	Route::get('blog', [HomeController:: class, 'showBlog']);
	Route::get('buat-blog', [HomeController:: class, 'showBuat']);

});