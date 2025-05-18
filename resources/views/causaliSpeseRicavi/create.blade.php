<x-main-layout>
    @if(session()->has('success'))
    <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif
    <h1 class="titolo_pagina">Inserisci causale</h1>
    <form action="{{ route('causaliSpeseRicavi.store')}}" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Segno</label>
            <select name="segno" id="segno" class="form-control" required>
            <option value="">-- Scegli una segno --</option>
            @foreach($segni as $segno)
            <option value="{{ $segno }}">{{ $segno }}</option>
            @endforeach
            </select>
            @error('segno') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Causale</label>
            <input type="text" class="form-control" id="causale" name="causale" value="{{ old('causale') }}">
            @error('causale') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="descrizione" name="descrizione" value="{{ old('descrizione') }}">
            @error('descrizione') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        <button type="submit" class="btn btn-secondary" onclick="window.history.back();">Torna indietro</button>
    </form>
</x-main-layout>