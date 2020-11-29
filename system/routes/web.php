<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;

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

Route::get('index', [IndexController:: class, 'showIndex']);
Route::get('detail', [IndexController:: class, 'showDetail']);
Route::get('blog/{detail}', [KontenController:: class, 'showBaca']);



// admin----------------------------------
Route::get('beranda', [HomeController:: class, 'showBeranda']);
Route::get('blog', [HomeController:: class, 'showBlog']);
Route::get('buat-blog', [HomeController:: class, 'showBuat']);



// Auth-----------------------
Route::get('register', [AuthController:: class, 'register']);
Route::get('login', [AuthController:: class, 'showLogin']);


// konten-----------------------
Route::get('konten', [KontenController:: class, 'index']);
Route::post('konten', [KontenController:: class, 'store']);
Route::get('konten/create', [KontenController:: class, 'create']);
Route::get('blog/{konten}', [KontenController:: class, 'show']);

// kategori
Route::get('kategori', [KategoriController:: class, 'index']);
Route::get('kategori/create', [KategoriController:: class, 'create']);
Route::post('kategori', [KategoriController:: class, 'store']);
Route::delete('kategori/{kategori}', [kategoriController::class, 'destroy']);