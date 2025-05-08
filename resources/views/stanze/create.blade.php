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
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</x-main-layout>