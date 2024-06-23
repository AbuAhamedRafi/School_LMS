<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('admin/login', [AdminController::class, 'index'])->name('admin.login');

route::post('admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

route::get('admin/form', [AdminController::class, 'form'])->name('admin.form');

route::get('admin/table', [AdminController::class, 'table'])->name('admin.table');