<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('/register', App\Http\Controllers\Api\Auth\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\Auth\LoginController::class)->name('login');
Route::post('/logout', App\Http\Controllers\Api\Auth\LogoutController::class)->name('logout');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/levels', [App\Http\Controllers\Api\Level\LevelController::class, 'index'])->name('level');
Route::post('/levels', [App\Http\Controllers\Api\Level\LevelController::class, 'store']);
Route::get('/levels/{level}', [App\Http\Controllers\Api\Level\LevelController::class, 'show']);
Route::put('/levels/{level}', [App\Http\Controllers\Api\Level\LevelController::class, 'update']);
Route::delete('/levels/{level}', [App\Http\Controllers\Api\Level\LevelController::class, 'destroy']);

Route::group(
    ['prefix' => 'users', 'middleware' => 'auth:api'],
    function () {
        Route::get('/', [App\Http\Controllers\Api\User\UserController::class, 'index']);
        Route::post('/', [App\Http\Controllers\Api\User\UserController::class, 'store']);
        Route::get('/{user}', [App\Http\Controllers\Api\User\UserController::class, 'show']);
        Route::put('/{user}', [App\Http\Controllers\Api\User\UserController::class, 'update']);
        Route::delete('/{user}', [App\Http\Controllers\Api\User\UserController::class, 'destroy']);
    }
);

Route::group(
    ['prefix' => 'barang', 'middleware' => 'auth:api'],
    function () {
        Route::get('/', [App\Http\Controllers\Api\Barang\BarangController::class, 'index']);
        Route::post('/', [App\Http\Controllers\Api\Barang\BarangController::class, 'store']);
        Route::get('/{barang}', [App\Http\Controllers\Api\Barang\BarangController::class, 'show']);
        Route::put('/{barang}', [App\Http\Controllers\Api\Barang\BarangController::class, 'update']);
        Route::delete('/{barang}', [App\Http\Controllers\Api\Barang\BarangController::class, 'destroy']);
    }
);

Route::group(
    ['prefix' => 'kategori', 'middleware' => 'auth:api'],
    function () {
        Route::get('/', [App\Http\Controllers\Api\Kategori\KategoriController::class, 'index']);
        Route::post('/', [App\Http\Controllers\Api\Kategori\KategoriController::class, 'store']);
        Route::get('/{kategori}', [App\Http\Controllers\Api\Kategori\KategoriController::class, 'show']);
        Route::put('/{kategori}', [App\Http\Controllers\Api\Kategori\KategoriController::class, 'update']);
        Route::delete('/{kategori}', [App\Http\Controllers\Api\Kategori\KategoriController::class, 'destroy']);
    }
);
