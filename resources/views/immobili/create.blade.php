<x-main-layout>
    @if(session()->has('success'))
    <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif
    <h1 class="titolo_pagina">Inserisci immobile</h1>
    <form action="{{ route('immobili.store')}}" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Provincia</label>
            <select name="provincia" id="provincia" class="form-control" required>
            <option value="">-- Scegli una provincia --</option>
            @foreach($province as $provincia)
            <option value="{{ $provincia }}">{{ $provincia }}</option>
            @endforeach
            </select>
            @error('provincia') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Comune</label>
            <input type="text" class="form-control" id="comune" name="comune" value="{{ old('comune') }}">
            @error('comune') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="indirizzo" name="indirizzo" value="{{ old('indirizzo') }}">
            @error('indirizzo') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Civico</label>
            <input type="number" class="form-control" id="civico" name="civico" value="{{ old('civico') }}">
            @error('civico') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        <button type="submit" class="btn btn-secondary" onclick="window.history.back();">Torna indietro</button>
    </form>
</x-main-layout>