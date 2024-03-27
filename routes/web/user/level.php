<?php

use App\Http\Controllers\user\LevelController;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => 'level',
    'as' => 'level.'
], function () {
    Route::get('/', [LevelController::class, 'index']);

    // Route::get('/', function () {
//     return view('home');
// });

    Route::get('/tambah', [LevelController::class, 'tambah']);
    Route::post('/tambah_simpan', [LevelController::class, 'tambah_simpan']);

    Route::get('/ubah/{id}', [LevelController::class, 'ubah']);
    Route::post('/ubah_simpan/{id}', [LevelController::class, 'ubah_simpan']);

    Route::get('/hapus/{id}', [LevelController::class, 'hapus']);
});