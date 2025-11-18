<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobview', function () {
    return view('jobview');
});

Route::get('/dashboard',[DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::post('/tags/store', [TagController::class, 'store'])->name('tags.store');
Route::post('/tags/update/{tagid}', [TagController::class, 'update'])->name('tags.update');
Route::post('/tags/destroy/{tagid}', [TagController::class, 'destroy'])->name('tags.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
