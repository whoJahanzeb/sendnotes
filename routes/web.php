<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('notes', 'notes.index')
    ->middleware(['auth', 'verified'])
    ->name('notes.index');

Route::view('notes/${id}', 'notes.show')
    ->middleware(['auth', 'verified'])
    ->name('notes.show');

Route::view('notes/create', 'notes.create')
    ->middleware(['auth', 'verified'])
    ->name('notes.create');

require __DIR__ . '/auth.php';
