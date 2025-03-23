<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//Home and Auth Routes

Route::get('/', [HomeController::class, 'index'])->name ('home');
Route::get('/login', [AuthController::class, 'login'])->name ('login');
Route::get('/registration', [AuthController::class, 'registration'])->name ('registration');
Route::get('/resetpass', [AuthController::class, 'resetpass'])->name ('resetpass');
Route::get('/sendotp', [AuthController::class, 'sendotp'])->name ('sendotp');
Route::get('/verify', [AuthController::class, 'verify'])->name ('verify');

//Dashboard Routes
Route::get('/profile', [DashBoardController::class, 'profile'])->name ('profile');
Route::get('/category', [DashBoardController::class, 'category'])->name ('category');
Route::get('/product', [DashBoardController::class, 'product'])->name ('product');
Route::get('/invoice', [DashBoardController::class, 'invoice'])->name ('invoice');
Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name ('dashboard');
Route::get('/report', [DashBoardController::class, 'report'])->name ('report');


