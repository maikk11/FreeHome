<x-main-layout>
    @if(session()->has('success'))
    <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif
    <h1 class="titolo_pagina">Inserisci stanza</h1>
    <form action="{{ route('stanze.store', ['id' => $id])}}" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome stanza</label>
            <input type="text" class="form-control" id="nome_stanza" name="nome_stanza" value="{{ old('nome_stanza') }}">
            @error('nome_stanza') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo affitto</label>
            <input type="number" class="form-control" id="prezzo_affitto" name="prezzo_affitto" value="{{ old('prezzo_affitto') }}">
            @error('prezzo_affitto') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
         <div class="mb-3">
            <label class="form-label">Metri quadri</label>
            <input type="number" class="form-control" id="metri_quadri" name="metri_quadri" value="{{ old('metri_quadri') }}">
            @error('metri_quadri') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flag_balcone" id="balcone_0" value="0" checked>
                <label class="form-check-label" for="balcone_0">
                No balcone
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flag_balcone" id="balcone_1" value="1">
                <label class="form-check-label" for="balcone_1">
                Balcone in comune
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flag_balcone" id="balcone_2" value="2">
                <label class="form-check-label" for="balcone_2">
                Balcone privato
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        <button type="submit" class="btn btn-secondary" onclick="window.history.back();">Annulla</button>
    </form>
</x-main-layout>