<x-main-layout>
    <h1 class="titolo_pagina">Assegna inquilino</h1>

    <form action="{{ route('inquilini.assign_store', ['immobile_id' => $immobile_id, 'inquilino_id'=>$inquilino_id]) }}"
          method="POST"
          class="mt-5 mx-auto col-lg-6">
        @csrf

        {{-- STANZA --}}
        <div class="mt-3">
            <label class="form-label">Stanza</label>
            <select name="stanza_id" id="stanza" class="form-control" required>
                <option value="">-- Scegli una stanza --</option>

                @foreach($stanze as $stanza)
                    <option value="{{ $stanza->id }}">
                        {{ $stanza->nome_stanza }}
                    </option>
                @endforeach
            </select>

            @error('stanza_id')
                <span class="small text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- BUTTON --}}
        <div class="mt-4">
            <button type="submit" class="btn btn-primary" style="margin-bottom:2%">
                Inserisci
            </button>

            <a href="{{ route('inquilini.index', ['id' => $immobile_id]) }}"
               class="btn btn-secondary"
               style="margin-bottom:2%">
                Torna indietro
            </a>
        </div>
    </form>
</x-main-layout>
