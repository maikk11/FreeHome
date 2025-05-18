<x-main-layout>
    @if(session()->has('success'))
    <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif
    <h1 class="titolo_pagina">Inserisci inquilino</h1>
    <form action="{{ route('inquilini.store',['id' => $id]) }}" method="POST" class="mt-5 mx-auto col-lg-6">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
        @error('nome') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Cognome</label>
        <input type="text" class="form-control" id="cognome" name="cognome" value="{{ old('cognome') }}">
        @error('cognome') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Carta d'identità</label>
        <input type="text" class="form-control" id="carta_identità" name="carta_identità" value="{{ old('carta_identità') }}">
        @error('carta_identità') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Codice Fiscale</label>
        <input type="text" class="form-control" id="codice_fiscale" name="codice_fiscale" value="{{ old('codice_fiscale') }}">
        @error('codice_fiscale') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Data di Nascita</label>
        <input type="date" class="form-control" id="data_nascita" name="data_nascita" value="{{ old('data_nascita') }}">
        @error('data_nascita') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Provincia di Nascita</label>
        <select name="provincia_nascita" id="provincia_nascita" class="form-control" required>
            <option value="">-- Scegli una provincia --</option>
            @foreach($province as $provincia)
            <option value="{{ $provincia }}">{{ $provincia }}</option>
            @endforeach
            </select>
        @error('provincia_nascita') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Comune di Nascita</label>
        <input type="text" class="form-control" id="comune_nascita" name="comune_nascita" value="{{ old('comune_nascita') }}">
        @error('comune_nascita') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Provincia di Residenza</label>
        <select name="provincia_residenza" id="provincia_residenza" class="form-control" required>
            <option value="">-- Scegli una provincia --</option>
            @foreach($province as $provincia)
            <option value="{{ $provincia }}">{{ $provincia }}</option>
            @endforeach
        </select>
        @error('provincia_residenza') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Comune di Residenza</label>
        <input type="text" class="form-control" id="comune_residenza" name="comune_residenza" value="{{ old('comune_residenza') }}">
        @error('comune_residenza') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        @error('email') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Numero di Telefono</label>
        <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" value="{{ old('numero_telefono') }}">
        @error('numero_telefono') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Data Subentro</label>
        <input type="date" class="form-control" id="data_subentro" name="data_subentro" value="{{ old('data_subentro') }}">
        @error('data_subentro') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Contratto Lavorativo</label>
        <input type="text" class="form-control" id="contratto_lavorativo" name="contratto_lavorativo" value="{{ old('contratto_lavorativo') }}">
        @error('contratto_lavorativo') <span class="small text-danger">{{ $message }}</span>@enderror
    </div>

    @if($id!=0)
    <div class="mb-3">
        <label class="form-label">Stanza</label>
        <select name="stanza_id" id="stanza_id" class="form-control" required>
        <option value="">-- Scegli una stanza --</option>
        @foreach($stanze as $stanza)
            <option value="{{ $stanza->id }}">{{ $stanza->nome_stanza }}</option>
        @endforeach
        </select>
    </div>
    @else
    <input type="hidden" name="stanza_id" value=0>
    @endif

    <button type="submit" class="btn btn-primary" style="margin-bottom:2%">Inserisci</button>
    <button type="submit" class="btn btn-secondary" style="margin-bottom:2%" onclick="window.history.back();">Torna indietro</button>
</form>

</x-main-layout>