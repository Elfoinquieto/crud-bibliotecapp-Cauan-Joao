@extends('layouts.main_layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            @include('top_bar')
            @if(count($livros) === 0)
            <div class="row mt-5">
                <div class="col text-center">
                    <p class="display-6 mb-5 text-secondary opacity-50">Você não tem nenhum livro cadastrado!</p>
                    <a href="{{ route('new') }}" class="btn btn-secondary btn-lg p-3 px-5">
                        <i class="fa-regular fa-pen-to-square me-3"></i>Cadastre seu primeiro livro
                    </a>
                </div>
            </div>
            @else
            <!-- notes are available -->
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('new') }}" class="btn btn-secondary px-3">
                    <i class="fa-regular fa-pen-to-square me-2"></i>Novo livro
                </a>
            </div>
            @foreach ($livros as $livro)
            @include('livro')
            @endforeach
            @endif


        </div>
    </div>
</div>
@endsection