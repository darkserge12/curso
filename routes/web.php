<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\cursocontroller;

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

Route::get('/', homecontroller::class);

Route::controller(cursocontroller::class)->group(function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');
});
