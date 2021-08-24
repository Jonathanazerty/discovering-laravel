<?php

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

Route::get('/', [\App\Http\Controllers\Controller::class, 'view']);
// Route::get('/hello',[\App\Http\Controllers\Controller:: class, 'hello']);
// Route::get('/view',[\App\Http\Controllers\Controller:: class, 'view']);