<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
Route::middleware('auth')->group(function () {
Route::get('/index',[TaskController::class, 'index'])->name('index.index');
route::post('/store', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
