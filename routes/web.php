<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\todosController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/todos', [todosController::class, 'index'])->name('todos.index');
    Route::get('/todos/{todo}', [todosController::class, 'show'])->name('todos.show');
    Route::get('/new-todos', [todosController::class, 'create'])->name('todos.create');
    Route::post('/store-todos', [todosController::class, 'store'])->name('todos.store');
    Route::get('/todos/{todo}/edit', [todosController::class, 'edit'])->name('todos.edit');
    Route::post('/todos/{todo}/update-todos', [todosController::class, 'update'])->name('todos.update');
    Route::get('/todos/{todo}/delete', [todosController::class, 'destroy'])->name('todos.destroy');
    Route::get('/todos/{todo}/complete', [todosController::class, 'complete'])->name('todos.complete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
