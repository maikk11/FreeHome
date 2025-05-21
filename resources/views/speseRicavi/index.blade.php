<x-main-layout>
    <h1 class="titolo_pagina">COSTI E RICAVI</h1>

    <a href="{{ route('immobili.immobile', ['id'=>$immobile_id])}}" class="btn btn-secondary" style="margin-left:1%">Torna indietro</a>

    <div style="margin-top: 1%;">
        <a href="{{ route('speseRicavi.create', ['immobile_id'=>$immobile_id, 'segno' => '+']) }}" class="btn btn-primary" style="margin-left:1%">Inserisci Entrata</a>
        <a href="{{ route('speseRicavi.create', ['immobile_id'=>$immobile_id, 'segno' => '-']) }}" class="btn btn-primary" style="margin-left:1%">Inserisci Uscita</a>
    </div>

    <div>
        <ul class="list-group" style="flex:4; border-radius:20px; margin-top:1.5%">
            <!-- Intestazione -->
            <li class="list-group-item" style="display: grid; grid-template-columns: 1fr auto 1fr; align-items: center; background-color:lightgrey; font-weight: bold;">
                <span style="text-align: left;">Causale</span>
                <span style="text-align: center;">Data</span>
                <span style="text-align: right;">Valore</span>
            </li>

            <!-- Contenuto -->
            @foreach($movimenti as $movimento)
                @php
                    $backgroundColor = $movimento->segno == '+' ? '#32CD32' : '#FF0000';
                @endphp
                <li class="list-group-item" style="background-color: {{ $backgroundColor }}; display: grid; grid-template-columns: 1fr auto 1fr; align-items: center;">
                    <span style="font-weight: bold; text-align: left;">
                        {{ $movimento->causale }} - {{ $movimento->descrizione }}
                    </span>
                    <span style="font-weight: bold; text-align: center;">
                        {{ $movimento->data }}
                    </span>
                    <span style="font-weight: bold; text-align: right;">
                        € {{ $movimento->valore }}
                    </span>
                </li>
            @endforeach
          <li class="list-group-item" style="display: grid; grid-template-columns: 1fr auto 1fr; align-items: center; background-color: lightgrey; font-weight: bold;">
            <span style="text-align: left;"></span>
            <span style="text-align: center;"></span>
            <span style="text-align: right;">Totale: € {{ number_format($totale, 2, ',', '.') }}</span>
            </li>
        </ul>
    </div>
</x-main-layout>
