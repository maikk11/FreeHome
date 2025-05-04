<x-main-layout>
    <h1 class="titolo_pagina">Modifica Profilo</h1>

    <div class="container" style="max-width: 600px; margin-top: 30px; background-color:lightgray; padding: 20px; border-radius: 15px;">
        <form method="POST" action="{{ route('profili.update', ['profilo' => $profilo]) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label"><strong>Nome</strong></label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $profilo->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label"><strong>Cognome</strong></label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname', $profilo->surname) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label"><strong>Email</strong></label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $profilo->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="birth" class="form-label"><strong>Data di Nascita</strong></label>
                <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth', $profilo->birth) }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Salva</button>
                <a href="{{ route('profili.index', ['id' => $profilo->id]) }}" class="btn btn-secondary">Annulla</a>
            </div>
        </form>
    </div>
</x-main-layout>
