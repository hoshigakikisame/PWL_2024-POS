<?php

use App\Http\Controllers\product\CategoryController;
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
    'prefix'     => 'product/category',
    'as'         => 'product.category.'
], function () {
    Route::get('/{category}', [CategoryController::class, 'handle'])->name('handle');
});