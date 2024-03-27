<?php

use App\Http\Controllers\FormController;
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
    'prefix'     => 'forms',
    'as'         => 'forms.'
], function () {
    Route::get('/general', [FormController::class, 'generalElements'])->name('general');
    Route::get('/advanced', [FormController::class, 'advancedElements'])->name('advanced');
    Route::get('/editors', [FormController::class, 'editors'])->name('editors');
    Route::get('/validation', [FormController::class, 'validationElements'])->name('validation');
    Route::get('/m_user', [FormController::class, 'm_user'])->name('m_user');
    Route::get('/m_level', [FormController::class, 'm_level'])->name('m_level');
});