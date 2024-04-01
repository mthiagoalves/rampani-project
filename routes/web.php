<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'getHomepage'])->name('homepage');

Route::get('/procedimentos', [FrontendController::class, 'getProcedures'])->name('procedures');

Route::get('/procedimentos/{slug}', [FrontendController::class, 'getProcedure'])->name('procedure');

Route::get('/termos-e-condicoes', [FrontendController::class, 'getTermsAndConditions'])->name('terms-and-conditions');

Route::get('/politica-de-privacidade', [FrontendController::class, 'getPrivacyPolicy'])->name('privacy-policy');

Route::get('/blog', [FrontendController::class, 'getBlog'])->name('blog');

Route::get('/blog/{slug}', [FrontendController::class, 'getPost'])->name('post');

Route::get('/a-clinica', [FrontendController::class, 'getTheClinic'])->name('clinic');

// Landings Page
Route::get('/estetica-intima-masculina', [FrontendController::class, 'getLandingMaleAesthetics'])->name('male-aesthetic');


// Forms Process
Route::post('/geral-scheduling', [FormsController::class, 'geralScheduling'])->name('geralScheduling');

Route::post('/process-message', [FormsController::class, 'processMessage'])->name('processMessage');


// Backoffice
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [BackofficeController::class, 'getDashboard'])->name('dashboard');

    Route::get('/backoffice/homepage', [BackofficeController::class, 'getHomepage'])->name('backoffice.homepage');

    Route::get('/backoffice/procedimentos', [BackofficeController::class, 'getProcedures'])->name('backoffice.procedures');

    Route::get('/backoffice/campanhas', [BackofficeController::class, 'getCampain'])->name('backoffice.campain');

    Route::get('/backoffice/blog', [BackofficeController::class, 'getBlog'])->name('backoffice.blog');

    Route::post('/backoffice/create-post', [BackofficeController::class, 'createPost'])->name('backoffice.create-post');

    Route::post('/backoffice/update-post', [BackofficeController::class, 'updatePost'])->name('backoffice.update-post');

    Route::post('/backoffice/remove-post', [BackofficeController::class, 'removePost'])->name('backoffice.remove-post');

    Route::post('/backoffice/image-post-upload', [BackofficeController::class, 'uploadImagePost'])->name('backoffice.image-post');

    Route::post('/backoffice/create-category', [BackofficeController::class, 'createCategory'])->name('backoffice.create-category');

    Route::post('/backoffice/remove-category', [BackofficeController::class, 'removeCategory'])->name('backoffice.remove-category');

    Route::post('/backoffice/update-category', [BackofficeController::class, 'updateCategory'])->name('backoffice.update-category');

    Route::post('/backoffice/create-campain', [BackofficeController::class, 'createCampain'])->name('backoffice.create-campain');

    Route::post('/backoffice/update-campain', [BackofficeController::class, 'updateCampain'])->name('backoffice.update-campain');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
