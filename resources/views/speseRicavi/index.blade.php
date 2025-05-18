<x-main-layout>
    <h1 class="titolo_pagina">SPESE E RICAVI</h1>
    <a href="{{ route('immobili.immobile', ['id' => $id]) }}" class="btn btn-secondary" style="margin-left:1%">Torna indietro</a>
    <a href="{{ route('immobili.immobile', ['id' => $id]) }}" class="btn btn-primary" style="margin-left:1%">Inserisci movimento</a>
</x-main-layout>