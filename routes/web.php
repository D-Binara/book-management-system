<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('welcome');
});
Route::get('/books/view', [BookController::class, 'index'])->name('books.view');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
