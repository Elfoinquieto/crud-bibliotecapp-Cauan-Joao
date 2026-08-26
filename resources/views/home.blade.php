@extends('layouts.main_layout')

@section('content')
<div class="container py-4">

 
    <div class="p-4 mb-4 rounded-3 text-dark fw-bold" style="background-color: #facc15;">
        <h1 class="fw-black mb-1">BEM-VINDO!</h1>
        <p class="mb-0">Gerencie sua biblioteca de livros e autores em um só lugar.</p>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 mb-3">
            <div class="card bg-dark text-white border-secondary h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title text-warning fw-bold mb-1">
                            <i class="fa-solid fa-book me-2"></i>LIVROS
                        </h4>
                        <p class="text-secondary small mb-0">Ver e gerenciar todos os livros</p>
                    </div>
                    <a href="{{ route('listarLivros') }}" class="btn btn-warning fw-bold">
                        ACESSAR
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card bg-dark text-white border-secondary h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title text-warning fw-bold mb-1">
                            <i class="fa-solid fa-user-pen me-2"></i>AUTORES
                        </h4>
                        <p class="text-secondary small mb-0">Ver e gerenciar todos os autores</p>
                    </div>
                    <a href="{{ route('listarAutores') }}" class="btn btn-warning fw-bold">
                        ACESSAR
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="text-warning fw-bold mb-0">ÚLTIMOS 4 LIVROS</h3>
        <a href="{{ route('cadastroLivro') }}" class="btn btn-outline-warning btn-sm fw-bold">
            <i class="fa-solid fa-plus me-1"></i> ADICIONAR LIVRO
        </a>
    </div>

    <div class="row">
        @forelse($latestBooks as $book)
            <div class="col-md-3 col-sm-6 mb-4">
                <x-book-card :book="$book" />
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-dark text-secondary text-center border-secondary py-4 mb-0">
                    Nenhum livro cadastrado ainda. 
                    <a href="{{ route('cadastroLivro') }}" class="text-warning fw-bold text-decoration-none">
                        Cadastrar o primeiro livro
                    </a>
                </div>
            </div>
        @endforelse
    </div>

</div>
@endsection