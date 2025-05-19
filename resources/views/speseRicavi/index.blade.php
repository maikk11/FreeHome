<x-main-layout>
    <h1 class="titolo_pagina">COSTI E RICAVI</h1>
    <a href="{{ route('immobili.immobile', ['id'=>$immobile_id])}}" class="btn btn-secondary" style="margin-left:1%">Torna indietro</a>
    <div style="margin-top: 1%;">
        <a href="{{ route('speseRicavi.create', ['immobile_id'=>$immobile_id, 'segno' => '+']) }}" class="btn btn-primary" style="margin-left:1%">Inserisci Entrata</a>
        <a href="{{ route('speseRicavi.create', ['immobile_id'=>$immobile_id, 'segno' => '-']) }}" class="btn btn-primary" style="margin-left:1%">Inserisci Uscita</a>
    </div>
    <div>
        @foreach($movimenti as $movimento)
        <ul class="list-group" style="flex:4; border-radius:20px; margin-top:1.5%">
            <li class="list-group-item">{{$movimento->causale}} {{$movimento->valore}} {{$movimento->data}}</li>
        </ul>
        @endforeach
    </div>

</x-main-layout>