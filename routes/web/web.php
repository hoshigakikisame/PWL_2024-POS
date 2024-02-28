<?php

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

// require other route files
require __DIR__ . '/product/product.php';
require __DIR__ . '/user/user.php';
require __DIR__ . '/transaction/transaction.php';

Route::get('/', function () {
    return view('home');
});