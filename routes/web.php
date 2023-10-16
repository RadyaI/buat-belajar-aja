<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

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


// Route::get('/', [AuthController::class, 'kelogin']);

//LOGIN
Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'otentikasi']);
Route::get('/logout', [AuthController::class, 'logout']);

//REGISTRASI
Route::get('/registrasi', [AuthController::class, 'form_register']);
Route::post('/registrasi', [AuthController::class, 'register']);

//BLOG
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::patch('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

//SISWA
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa/create', [SiswaController::class, 'store']);
Route::get('/siswa/{id}', [SiswaController::class, 'show']);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::delete('/delete/{siswaID}', [SiswaController::class, 'deleteSiswa']);
