<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsBackendController;
use App\Http\Controllers\SkillsFrontendController;
use App\Http\Controllers\SkillsOtherController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Home
Route::get('/', [HomeController::class, 'index']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Header
Route::get('/header', [HeaderController::class, 'index'])->middleware('auth');
Route::put('/header/{id}', [HeaderController::class, 'update'])->middleware('auth');

// About
Route::get('/about', [AboutController::class, 'index'])->middleware('auth');
Route::put('/about/{id}', [AboutController::class, 'update'])->middleware('auth');

// Skills
Route::resource('skills-frontend', SkillsFrontendController::class)->middleware('auth');
Route::resource('skills-backend', SkillsBackendController::class)->middleware('auth');
Route::resource('skills-other', SkillsOtherController::class)->middleware('auth');
