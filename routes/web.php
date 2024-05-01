<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/students', \App\Livewire\Students\Index::class)->name('students.index');
Route::get('/students/create', \App\Livewire\Students\Create::class)->name('students.create');
Route::get('/students/show/{student}', \App\Livewire\Students\Show::class)->name('students.show');
Route::get('/students/update/{student}', \App\Livewire\Students\Edit::class)->name('students.edit');