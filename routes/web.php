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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('todos/create', [App\Http\Controllers\TodoController::class, 'create']);
Route::post('todos/create', [App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');