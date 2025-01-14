<?php

use Illuminate\Support\Facades\Route;

Route::prefix('blog')->group(function (){
    Route::get('/', [\Sdenizhan\Blog\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
});



Route::get('modules/admin/blog', [\Sdenizhan\Blog\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.index');

