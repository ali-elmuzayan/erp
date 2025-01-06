<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;





Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('admin.login.store');

Route::get('/', function () {
    return redirect()->route('login');
});

