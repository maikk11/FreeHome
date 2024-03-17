<x-main-layout>
    @if(session()->has('success'))
    <h2 class="alert alert-success">{{session('success')}}</h2>
    @endif
    <h1>Inserisci immobile</h1>
    <form action="{{ route('immobili.store')}}" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Provincia</label>
            <input type="text" class="form-control" id="provincia" name="provincia" value="{{ old('provincia') }}">
            @error('provincia') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Comune</label>
            <input type="text" class="form-control" id="comune" name="comune" value="{{ old('comune') }}">
            @error('comune') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Via</label>
            <input type="text" class="form-control" id="via" name="via" value="{{ old('via') }}">
            @error('via') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Civico</label>
            <input type="number" class="form-control" id="civico" name="civico" value="{{ old('civico') }}">
            @error('civico') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Prezzo di affitto</label>
            <input type="number" class="form-control" id="prezzo_affitto" name="prezzo_affitto" value="{{ old('prezzo_affitto') }}">
            @error('prezzo_affitto') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Locali affittabili</label>
            <input type="number" class="form-control" id="locali_affittabili" name="locali_affittabili" value="{{ old('locali_affittabili') }}">
            @error('locali_affittabili') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</x-main-layout>