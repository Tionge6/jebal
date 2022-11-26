<?php

declare(strict_types=1);
use Illuminate\Support\Facades\Route;
Route::view('/', 'welcome')->name('home');
Route::get(
    '/dashboard',
    App\Http\Controllers\DashboardController::class
)->middleware(['auth'])->name('dashboard');
//require __DIR__.'/auth.php';
Route::post(
    'bookmarks',
    App\Http\Controllers\Bookmarks\StoreController::class,
)->middleware(['auth'])->name('bookmarks.store');
Route::delete(
    'bookmarks/{bookmark}',
    App\Http\Controllers\Bookmarks\DeleteController::class,
)->middleware(['auth'])->name('bookmarks.delete');
Route::get(
    'bookmarks/{bookmark}',
    App\Http\Controllers\Bookmarks\RedirectController::class
)->middleware(['auth'])->name('bookmarks.redirect');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
