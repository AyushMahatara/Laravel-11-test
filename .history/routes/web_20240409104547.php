<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/note', [WelcomeController::class, 'index'])->name('note.index');
Route::get('/note/create', [WelcomeController::class, 'create'])->name('note.create');
Route::post('/note', [WelcomeController::class, 'store'])->name('note.store');
Route::get('/note/{id}', [WelcomeController::class, 'show'])->name('note.show');
Route::get('/note/{id}/edit', [WelcomeController::class, 'edit'])->name('note.edit');
Route::put('/note/{id}', [WelcomeController::class, 'update'])->name('note.update');
Route::delete('/note/{id}', [WelcomeController::class, 'delete'])->name('note.delete');
