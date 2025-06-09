<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\StaffController;

Route::get('/', [PublicController::class,'homepage'])->name('home');

Route::get('/articles',[ArticleController::class,'articles'])->name('articoli');

Route::get('/articles/dettaglio/{title}/{price}',[ArticleController::class,'detail'])->name('detail');

Route::get('/about_us',[StaffController::class,'chi_siamo'])->name('about.us');

Route::get('/about_us/dettaglio/{name}',[StaffController::class,'dettaglio'])->name('dettaglio');

