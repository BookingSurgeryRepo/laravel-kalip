<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('page.login');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [\App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('dashboard.logout');
    Route::get('/pages/live/{id}', [\App\Http\Controllers\Admin\PageController::class, 'live'])->name('pages.live');


    Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
});
