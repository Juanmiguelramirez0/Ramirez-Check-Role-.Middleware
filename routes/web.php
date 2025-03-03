<?php
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/view/{id}', [UserController::class, 'view'])->name('view');
Route::get('/admin/{id}', [UserController::class, 'admin'])->middleware(CheckRole::class)->name('admin');
