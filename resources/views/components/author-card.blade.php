@props(['author'])

<div class="card bg-dark text-white border-secondary h-100 shadow-sm">
    <div class="card-body p-3">
        <div class="d-flex justify-content-between align-items-start mb-2">
            <a href="{{ route('detalhesAutor', $author->id) }}" class="text-warning text-decoration-none fw-bold h5 mb-0 text-truncate me-2" title="{{ $author->name }}">
                {{ $author->name }}
            </a>
             <div class="d-flex gap-1">
                <a href="{{ route('editarAutor', ['id' => \App\Services\Operations::encryptId($author->id)]) }}" class="btn btn-sm btn-outline-warning px-2 py-0" title="Editar">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ route('deletarAutor', ['id' => \App\Services\Operations::encryptId($author->id)]) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja apagar este autor?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger px-2 py-0" title="Apagar">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>

        <p class="text-secondary small mb-0">
            <i class="fa-solid fa-earth-americas me-1"></i>{{ $author->nationality }}
        </p>
    </div>
</div>