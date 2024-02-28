<?php

use App\Http\Controllers\transaction\TransactionController;
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
    'prefix'     => 'transaction',
    'as'         => 'transaction.'
], function () {
    Route::get('/', [TransactionController::class, 'index'])->name('index');
});