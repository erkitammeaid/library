<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'index']);
Route::get('/book/{book}', [BookController::class, 'book']);

Route::get('/author/{author}', [AuthorController::class, 'index']);
