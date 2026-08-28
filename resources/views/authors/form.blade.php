@extends('layouts.main_layout')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="row mb-3">
                    <div class="col">
                        <p class="display-6 text-warning mb-0 fw-bold">
                            {{ isset($author) ? 'EDITAR AUTOR' : 'NOVO AUTOR' }}
                        </p>
                    </div>
                    <div class="col text-end">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-danger">
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                </div>


                <form action="{{ isset($author) ? route('atualizarAutor') : route('salvarAutor') }}" method="post">
                    @csrf
                    @if(isset($author))
                        @method('PUT')
                        <input type="hidden" name="author_id" value="{{ \App\Services\Operations::encryptId($author->id) }}">
                    @endif

                    <div class="mb-3">
                        <label class="form-label text-light">Nome do Autor</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary" name="name"
                            value="{{ old('name', $author->name ?? '') }}">
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light">Idade</label>
                        <input type="number" class="form-control bg-dark text-white border-secondary" name="age"
                            value="{{ old('age', $author->age ?? '') }}">
                        @error('age')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light">Gênero Literário</label>
                        <select class="form-select bg-dark text-white border-secondary" name="literary_genre">
                            <option value="">Selecione o gênero...</option>
                            @foreach(App\Models\Author::GENRES as $genre)
                                <option value="{{ $genre }}" {{ old('literary_genre', $author->literary_genre ?? '') == $genre ? 'selected' : '' }}>
                                    {{ $genre }}
                                </option>
                            @endforeach
                        </select>
                        @error('literary_genre')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-light">Nacionalidade</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary" name="nationality"
                            value="{{ old('nationality', $author->nationality ?? '') }}">
                        @error('nationality')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>




                    <div class="row mt-4">
                        <div class="col text-end">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary px-4 me-2">
                                <i class="fa-solid fa-ban me-1"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-warning px-5 fw-bold">
                                <i class="fa-regular fa-circle-check me-1"></i> Salvar
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection