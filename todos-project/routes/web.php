<?php

use App\Http\Controllers\TodosController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/todos', [TodosController::class, 'index'])->name('todos');

Route::post('/todos', [TodosController::class, 'store'])->name('todos');

// Route::get('/todos-list', [TodosController::class, 'index'])->name('todos-list');