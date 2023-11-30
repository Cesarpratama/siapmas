<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\FormController;

// Route untuk menampilkan semua post
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route untuk menampilkan formulir tambah post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route untuk menyimpan post baru
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route untuk menampilkan detail post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Route untuk menampilkan formulir edit post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route untuk memperbarui post
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Route untuk menghapus post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Route untuk menampilkan formulir
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');

// Route untuk menyimpan data dari formulir
Route::post('/store-data', [FormController::class, 'storeData'])->name('store.data');
