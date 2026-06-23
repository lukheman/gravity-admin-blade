<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LogoutController;

Route::get('/', function () {
    return 'Livewire has been removed.';
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('/logout', [LogoutController::class, '__invoke'])->name('logout');
});