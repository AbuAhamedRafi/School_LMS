<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::group(['prefix' => 'admin'], function () {
    route::group(['middleware' => 'admin.guest'], function () {
        route::get('login', [AdminController::class, 'index'])->name('admin.login');

        route::get('register', [AdminController::class, 'register'])->name('admin.register');

        route::post('login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    });
    route::group(['middleware' => 'admin.auth'], function () {
        route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        route::get('form', [AdminController::class, 'form'])->name('admin.form');

        route::get('table', [AdminController::class, 'table'])->name('admin.table');

        route::get('academic_year/create', [AcademicYearController::class, 'index'])->name('academic_year.create');
        route::post('<academic_year/store', [AcademicYearController::class,'store'])->name('academic_year.store');
        route::get('academic_year/read', [AcademicYearController::class, 'read'])->name('academic_year.read');
        route::get('academic_year/delete/{id}', [AcademicYearController::class, 'delete'])->name('academic_year.delete');
    });
});