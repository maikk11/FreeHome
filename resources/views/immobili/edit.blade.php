<x-main-layout>
    <h1 class="titolo_pagina">Modifica Profilo</h1>

    <div class="container" style="max-width: 600px; margin-top: 30px; background-color:lightgray; padding: 20px; border-radius: 15px;">
        <form method="POST" action="{{ route('immobili.update', ['immobile' => $immobile->id]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="provincia" class="form-label"><strong>Provincia</strong></label>
                 <select name="provincia" id="provincia" class="form-control" required>
                <option value="">-- Scegli una provincia --</option>
                @foreach($province as $provincia)
                <option value="{{ $provincia }}" {{ (old('provincia', $immobile->provincia) == $provincia) ? 'selected' : '' }}>{{ $provincia }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="comune" class="form-label"><strong>Comune</strong></label>
                <input type="text" class="form-control" id="comune" name="comune" value="{{ old('comune', $immobile->comune) }}" required>
            </div>

            <div class="mb-3">
                <label for="via" class="form-label"><strong>Indirizzo</strong></label>
                <input type="text" class="form-control" id="indirizzo" name="indirizzo" value="{{ old('indirizzo', $immobile->indirizzo) }}" required>
            </div>

            <div class="mb-3">
                <label for="civico" class="form-label"><strong>Civico</strong></label>
                <input type="number" class="form-control" id="civico" name="civico" value="{{ old('civico', $immobile->civico) }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Salva</button>
                <a href="{{ route('immobili.immobile', ['id' => $immobile->id]) }}" class="btn btn-secondary">Annulla</a>
            </div>
        </form>
    </div>
</x-main-layout>
