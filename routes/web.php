<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\MusBeLoggedin;

Route::get('/', [UserController::class, 'showHomepage'])->name('login');

/// USER ROUTES;
Route::get("/login", [UserController::class, 'showLoginForm']);
Route::post("/login", [UserController::class, 'signIn']);
Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/sign-out', [UserController::class, 'signOut'])->middleware(MusBeLoggedin::class);

// HOMEPAGE RELATED ROUTES

Route::get('/evaluasi', [PageController::class, 'showEvaluasi'])->middleware(MusBeLoggedin::class);
Route::get('/laporan', [PageController::class, 'showLaporan'])->middleware(MusBeLoggedin::class);
Route::get('/petunjuk', [PageController::class, 'showPetunjuk'])->middleware(MusBeLoggedin::class);
Route::get('/kompetensi', [PageController::class, 'showKompetensi'])->middleware(MusBeLoggedin::class);
Route::get('/laporan', [PageController::class, 'showLaporan'])->middleware(MusBeLoggedin::class);
