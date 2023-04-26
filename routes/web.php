<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioProjectController;
use App\Http\Controllers\ResumeEducationController;
use App\Http\Controllers\ResumeExperienceController;
use App\Http\Controllers\ResumeSummaryController;
use App\Http\Controllers\SkillsBackendController;
use App\Http\Controllers\SkillsFrontendController;
use App\Http\Controllers\SkillsOtherController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;

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

// Resume
Route::get('/resume-summary', [ResumeSummaryController::class, 'index'])->middleware('auth');
Route::put('/resume-summary/{id}', [ResumeSummaryController::class, 'update'])->middleware('auth');
Route::resource('resume-education', ResumeEducationController::class)->middleware('auth');
Route::resource('resume-experience', ResumeExperienceController::class)->middleware('auth');

// Portfolio
Route::resource('portfolio-project', PortfolioProjectController::class)->middleware('auth');
