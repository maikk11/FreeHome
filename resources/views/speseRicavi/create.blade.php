<x-main-layout>
    @if(session()->has('success'))
    <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif
    @if($segno=='+')
    <h1 class="titolo_pagina">Inserisci ricavo</h1>
    @else
    <h1 class="titolo_pagina">Inserisci spesa</h1>
    @endif
    <form action="{{ route('speseRicavi.store', ['immobile_id'=>$immobile_id])}}" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tipo causale</label>
            <select name="causale" id="causale" class="form-control" required>
            <option value="">-- Scegli una causale--</option>
            @foreach($causali as $causale)
            <option value="{{ $causale->causale }}">{{ $causale->causale }} {{ $causale->descrizione }}</option>
            @endforeach
            </select>
            @error('causale') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Valore</label>
            <input type="number" class="form-control" id="valore" name="valore" value="{{ old('valore') }}">
            @error('valore') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Valore</label>
            <input type="date" class="form-control" id="data" name="data" value="{{ old('data') }}">
            @error('data') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        <a type="submit" class="btn btn-secondary" href="{{ route('speseRicavi.index', ['immobile_id'=>$immobile_id]) }}">Torna indietro</a>
    </form>
</x-main-layout>