<div class="row">
    <div class="col">
        <div class="card p-4">
            <div class="row">
                <div class="col">
                    <h4 class="text-info">{{ $note->title }}</h4>
                    <p><small>Criado em: {{ $note->created_at->format('d/m/Y H:i') }}
                        </small>
                        @if ($note->created_at != $note->updated_at)
                            <small class="text-secondary ms-5">
                                Atualizado em: {{ $note->updated_at->format('d/m/Y H:i') }}
                            </small>
                        @endif
                    </p>
                </div>
                <div class="col text-end">
                    <a href="{{ route('edit', ['id' => Crypt::encrypt($note->id)]) }}"
                        class="btn btnoutline-secondary btn-sm mx-1"><I class="fa-regular fa-pen-to-square"></i></a>
                    <a href="{{ route('delete', ['id' => Crypt::encrypt($note->id)]) }}" class="btn
btn-outline-danger btn-sm mx-1"><i class="fa-regular fa-trash-can"></i></a>
                </div>
            </div>
            <hr>
            <p class="text-secondary">{{$note->text}}</p>
        </div>
    </div>
</div>