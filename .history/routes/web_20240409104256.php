<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/note', [WelcomeController::class, 'index'])->name('note.index');
Route::get('note/create', [WelcomeController::class, 'create'])->name('note.create');
Route::post('note', [WelcomeController::class, 'store'])-- > name('note.store');
