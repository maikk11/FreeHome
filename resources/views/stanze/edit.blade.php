<x-main-layout>
    <h1 class="titolo_pagina">Modifica Stanza</h1>

    <div class="container" style="max-width: 600px; margin-top: 30px; background-color:lightgray; padding: 20px; border-radius: 15px; margin-bottom: 2%;">
        <form method="POST" action="{{ route('stanze.update', ['stanza' => $stanza]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label"><strong>Nome stanza</strong></label>
                <input type="text" class="form-control" id="nome_stanza" name="nome_stanza" value="{{ old('nome_stanza', $stanza->nome_stanza) }}" required>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label"><strong>Prezzo affitto</strong></label>
                <input type="number" class="form-control" id="prezzo_affitto" name="prezzo_affitto" value="{{ old('prezzo_affitto', $stanza->prezzo_affitto) }}" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Salva</button>
                <a href="{{ route('stanze.index', ['id' => $stanza->immobile_id]) }}"  class="btn btn-secondary">Annulla</a>
            </div>
        </form>
    </div>
</x-main-layout>
