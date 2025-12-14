<x-main-layout>
    <h1 class="titolo_pagina">Assegna inquilino</h1>

    <form action="" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf

            {{-- STANZA --}}
            <div class="mt-3">
                <label class="form-label">Stanza</label>
                <select name="stanza" id="stanza" class="form-control" required>
                    <option value="">-- Scegli una stanza --</option>

                    @foreach($stanze as $stanza)
                        <option value="{{ $stanza->id }}"
                                data-immobile="{{ $stanza->immobile_id }}"
                                hidden>
                            {{ $stanza->nome_stanza }}
                        </option>
                    @endforeach
                </select>

                @error('stanza')
                    <span class="small text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </form>
</x-main-layout>
