<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::post('/access', [AuthenticatedSessionController::class, 'accessCode'])->name('access');

Route::get('/resume', [\App\Http\Controllers\PageController::class, 'resume'])->middleware(['auth'])->name('resume');
Route::get('/resume/{id}', [\App\Http\Controllers\ResumeController::class, 'edit'])->middleware(['auth', 'admin'])->name('edit.resume');
Route::patch('/resume/{id}', [\App\Http\Controllers\ResumeController::class, 'update'])->middleware(['auth', 'admin'])->name('update.resume');

Route::get('/coverletter/{id}', [\App\Http\Controllers\CoverLetterController::class, 'edit'])->middleware(['auth', 'admin'])->name('edit.coverletter');
Route::post('/coverletter', [\App\Http\Controllers\CoverLetterController::class, 'store'])->middleware(['auth', 'admin'])->name('store.coverletter');
Route::patch('/coverletter/{id}', [\App\Http\Controllers\CoverLetterController::class, 'update'])->middleware(['auth', 'admin'])->name('update.coverletter');

Route::get('/dashboard', [\App\Http\Controllers\PageController::class, 'dashboard'])->middleware(['auth', 'admin'])->name('dashboard');

require __DIR__.'/auth.php';
