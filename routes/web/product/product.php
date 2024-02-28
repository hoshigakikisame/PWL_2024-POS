<?php

use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\product\ProductController;
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

require __DIR__ . '/category.php';

Route::group([
    'prefix'     => 'product',
    'as'         => 'product.'
], function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
});