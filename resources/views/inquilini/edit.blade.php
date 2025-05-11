<x-main-layout>
    <h1 class="titolo_pagina">Modifica Inquilino</h1>

    <div class="container" style="max-width: 600px; margin-top: 30px; background-color:lightgray; padding: 20px; border-radius: 15px; margin-bottom: 2%;">
        <form method="POST" action="{{ route('inquilini.update', ['inquilino' => $inquilino]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label"><strong>Nome</strong></label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $inquilino->nome) }}" required>
            </div>

            <div class="mb-3">
                <label for="cognome" class="form-label"><strong>Cognome</strong></label>
                <input type="text" class="form-control" id="cognome" name="cognome" value="{{ old('cognome', $inquilino->cognome) }}" required>
            </div>

            <div class="mb-3">
                <label for="carta_identità" class="form-label"><strong>Carta d'identità</strong></label>
                <input type="text" class="form-control" id="carta_identità" name="carta_identità" value="{{ old('carta_identità', $inquilino->carta_identità) }}" required>
            </div>

            <div class="mb-3">
                <label for="codice_fiscale" class="form-label"><strong>Codice Fiscale</strong></label>
                <input type="text" class="form-control" id="codice_fiscale" name="codice_fiscale" value="{{ old('codice_fiscale', $inquilino->codice_fiscale) }}" required>
            </div>

            <div class="mb-3">
                <label for="data_nascita" class="form-label"><strong>Data di Nascita</strong></label>
                <input type="date" class="form-control" id="data_nascita" name="data_nascita" value="{{ old('data_nascita', $inquilino->data_nascita) }}" required>
            </div>

            <div class="mb-3">
                <label for="provincia_nascita" class="form-label"><strong>Provincia di Nascita</strong></label>
                <input type="text" class="form-control" id="provincia_nascita" name="provincia_nascita" value="{{ old('provincia_nascita', $inquilino->provincia_nascita) }}" required>
            </div>

            <div class="mb-3">
                <label for="comune_nascita" class="form-label"><strong>Comune di Nascita</strong></label>
                <input type="text" class="form-control" id="comune_nascita" name="comune_nascita" value="{{ old('comune_nascita', $inquilino->comune_nascita) }}" required>
            </div>

            <div class="mb-3">
                <label for="provincia_residenza" class="form-label"><strong>Provincia di Residenza</strong></label>
                <input type="text" class="form-control" id="provincia_residenza" name="provincia_residenza" value="{{ old('provincia_residenza', $inquilino->provincia_residenza) }}" required>
            </div>

            <div class="mb-3">
                <label for="comune_residenza" class="form-label"><strong>Comune di Residenza</strong></label>
                <input type="text" class="form-control" id="comune_residenza" name="comune_residenza" value="{{ old('comune_residenza', $inquilino->comune_residenza) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label"><strong>Email</strong></label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $inquilino->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="numero_telefono" class="form-label"><strong>Numero di Telefono</strong></label>
                <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" value="{{ old('numero_telefono', $inquilino->numero_telefono) }}" required>
            </div>

            <div class="mb-3">
                <label for="data_subentro" class="form-label"><strong>Data Subentro</strong></label>
                <input type="date" class="form-control" id="data_subentro" name="data_subentro" value="{{ old('data_subentro', $inquilino->data_subentro) }}" required>
            </div>

            <div class="mb-3">
                <label for="data_uscita" class="form-label"><strong>Data Uscita</strong></label>
                <input type="date" class="form-control" id="data_uscita" name="data_uscita" value="{{ old('data_uscita', $inquilino->data_uscita) }}">
            </div>

            <div class="mb-3">
                <label for="contratto_lavorativo" class="form-label"><strong>Contratto Lavorativo</strong></label>
                <input type="text" class="form-control" id="contratto_lavorativo" name="contratto_lavorativo" value="{{ old('contratto_lavorativo', $inquilino->contratto_lavorativo) }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Salva</button>
                <a href="{{ route('inquilini.inquilino', ['id' => $inquilino->id]) }}"  class="btn btn-secondary">Annulla</a>
            </div>
        </form>
    </div>
</x-main-layout>
