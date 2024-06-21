<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

// Articoli di giornale
// dettaglio dell'articolo 
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::middleware(['auth'])->group(function() {
    // form di creazione
    Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
    // store dell'articolo
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    // edit dell'articolo
    Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
    // delete dell'articolo
    Route::delete('/article/update/{article}', [ArticleController::class, 'destroy'])->name('article.delete');
});
// indice
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');