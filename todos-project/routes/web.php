<?php

use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [TodosController::class, 'index'])->name('todos');

Route::post('/todos', [TodosController::class, 'store'])->name('todos');

Route::get('/todos/{id}', [TodosController::class, 'show'])->name('todos-edit');

Route::patch('/todos/{id}', [TodosController::class, 'update'])->name('todos-update');

Route::delete('/todos/{id}', [TodosController::class, 'destroy'])->name('todos-destroy');

// Categories

Route::resource('categories', CategoriesController::class);