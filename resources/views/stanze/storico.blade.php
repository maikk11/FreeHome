<x-main-layout>
    <h1 class="titolo_pagina">STORICO {{$nome_stanza}}</h1>
    <button type="submit" class="btn btn-secondary" onclick="window.history.back();" style="margin-left:1%">Torna indietro</button>
    @foreach($inquilini as $inquilino)
    <ul class="list-group" style="flex:4; border-radius:20px; margin-top:1.5%">
            <li class="list-group-item">{{$inquilino->nome}} {{$inquilino->cognome}}</li>
    </ul>
    @endforeach
</x-main-layout>