<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

//middleware sem sessao
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');

//middleware com sessao
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
Route::put('/livros/atualizar/{id}', [BookController::class, 'updateBook'])->name('atualizarLivro');
Route::get('/livros/{id}', [BookController::class, 'showBook'])->name('detalhesLivro');
Route::delete('/livros/deletar/{id}', [BookController::class, 'deletarLivro'])->name('deletarLivro');