<?php
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FeeHeadController;
use App\Http\Controllers\FeeStructureController;
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
        route::get('academic_year/edit/{id}', [AcademicYearController::class, 'edit'])->name('academic_year.edit');
        route::post('academic_year/update', [AcademicYearController::class, 'update'])->name('academic_year.update');

        route::get('class/create', [ClassesController::class, 'index'])->name('class.create');
        route::post('class/store', [ClassesController::class, 'store'])->name('class.store');
        route::get('class/read', [ClassesController::class, 'read'])->name('class.read');
        route::get('class/edit/{id}', [ClassesController::class, 'edit'])->name('class.edit');
        route::post('class/update', [ClassesController::class, 'update'])->name('class.update');
        route::get('class/delete/{id}', [ClassesController::class, 'delete'])->name('class.delete');

        route::get('fee_head/create', [FeeHeadController::class, 'index'])->name('fee_head.create');
        route::post('fee_head/store', [FeeHeadController::class, 'store'])->name('fee_head.store');
        route::get('fee_head/read', [FeeHeadController::class, 'read'])->name('fee_head.read');
        route::get('fee_head/edit/{id}', [FeeHeadController::class, 'edit'])->name('fee_head.edit');
        route::post('fee_head/update', [FeeHeadController::class, 'update'])->name('fee_head.update');
        route::get('fee_head/delete/{id}', [ClassesController::class, 'delete'])->name('fee_head.delete');

        route::get('fee-structure/create', [FeeStructureController::class, 'index'])->name('fee-structure.create');
    });
});