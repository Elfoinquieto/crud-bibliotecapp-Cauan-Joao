<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [MainController::class, 'index'])->name('home');

    Route::get('/autores', [AuthorController::class, 'listAuthors'])->name('listarAutores');
    Route::get('/autores/cadastrar', [AuthorController::class, 'formAuthor'])->name('cadastroAutor');
    Route::post('/autores/salvar', [AuthorController::class, 'saveAuthor'])->name('salvarAutor');
    Route::get('/autores/editar/{id}', [AuthorController::class, 'editAuthor'])->name('editarAutor');
    Route::put('/autores/atualizar/{id}', [AuthorController::class, 'updateAuthor'])->name('atualizarAutor');
    Route::get('/autores/{id}', [AuthorController::class, 'showAuthor'])->name('detalhesAutor');
    Route::delete('/autores/deletar/{id}', [AuthorController::class, 'deletarAutor'])->name('deletarAutor');

    Route::get('/livros', [BookController::class, 'listBooks'])->name('listarLivros');
    Route::get('/livros/cadastrar', [BookController::class, 'formBook'])->name('cadastroLivro');
    Route::post('/livros/salvar', [BookController::class, 'saveBook'])->name('salvarLivro');
    Route::get('/livros/editar/{id}', [BookController::class, 'editBook'])->name('editarLivro');
    Route::put('/livros/atualizar/', [BookController::class, 'updateBook'])->name('atualizarLivro');
    Route::get('/livros/{id}', [BookController::class, 'showBook'])->name('detalhesLivro');
    Route::delete('/livros/deletar/{id}', [BookController::class, 'deletarLivro'])->name('deletarLivro');
    Route::get('/listDeletedBooks', [BookController::class, 'listDeletedBooks'])->name('listDeletedBooks');
    Route::get('/hardDelete-book/{id}', [BookController::class, 'hardDeleteBook'])->name('hardDelete');
    Route::get('/restore-book/{id}', [BookController::class, 'restoreBook'])->name('restore');
});