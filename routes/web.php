<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

//p2
Route::get('/books', [BookController::class, 'index'])
    ->name('books.index');

Route::get('/books/{book}', [BookController::class, 'show'])
    ->whereNumber('id')
    ->name('books.show');

//p4
Route::view('/', 'home')->name('home');
Route::resource('books', BookController::class);

Route::view('/soal', 'soal')
    ->name('soal');