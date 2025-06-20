<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Resource route, otomatis mencakup: index, create, store, show, edit, update, destroy
Route::resource('books', BookController::class)->except(['show']);

// Tambahan fitur custom
Route::get('/books/trash', [BookController::class, 'trash'])->name('books.trash');
Route::put('/books/{id}/restore', [BookController::class, 'restore'])->name('books.restore');
Route::delete('/books/{id}/force-delete', [BookController::class, 'forceDelete'])->name('books.force-delete');
