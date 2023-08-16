<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::get('/item/{id}', [App\Http\Controllers\ProductsController::class, 'view_item'])->name('view_item');

// Route::put('admin/classes', [App\Http\Controllers\ClassesController::class, 'update'])->name('admin-bookings.update');

