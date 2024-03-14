<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontendController::class, 'getHomepage'])->name('homepage');

Route::get('/procedimentos', [FrontendController::class, 'getProcedures'])->name('procedures');

Route::get('/procedimentos/{slug}', [FrontendController::class, 'getProcedure'])->name('procedure');

Route::get('/termos-e-condicoes', [FrontendController::class, 'getTermsAndConditions'])->name('terms-and-conditions');

Route::get('/politica-de-privacidade', [FrontendController::class, 'getPrivacyPolicy'])->name('privacy-policy');

Route::get('/blog', [FrontendController::class, 'getBlog'])->name('blog');

Route::get('/a-clinica', [FrontendController::class, 'getTheClinic'])->name('clinic');

// Forms Process
Route::post('/geral-scheduling', [FormsController::class, 'geralScheduling'])->name('geralScheduling');

Route::post('/process-message', [FormsController::class, 'processMessage'])->name('processMessage');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
