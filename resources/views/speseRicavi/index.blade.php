<x-main-layout>
    <h1 class="titolo_pagina">COSTI E RICAVI</h1>

    <a href="{{ route('immobili.immobile', ['id' => $immobile_id]) }}"
       class="btn btn-secondary"
       style="margin-left:1%">
        Torna indietro
    </a>

    <div style="margin-top: 1%;">
        <a href="{{ route('speseRicavi.create', ['immobile_id' => $immobile_id, 'segno' => '+']) }}"
           class="btn btn-primary"
           style="margin-left:1%">
            Inserisci Entrata
        </a>

        <a href="{{ route('speseRicavi.create', ['immobile_id' => $immobile_id, 'segno' => '-']) }}"
           class="btn btn-primary"
           style="margin-left:1%">
            Inserisci Uscita
        </a>
    </div>

    <!-- FILTRO DATE -->
    <form action="{{ route('speseRicavi.search', ['immobile_id' => $immobile_id]) }}" method="GET" style="margin-top: 1.5%; margin-left:1%">
        <div style="display: flex; align-items: center; gap: 10px;">
            <label>Da:</label>
            <input type="date"
                   name="data_da"
                   class="form-control"
                   style="width: 180px"
                   value="{{ request('data_da') }}">

            <label>A:</label>
            <input type="date"
                   name="data_a"
                   class="form-control"
                   style="width: 180px"
                   value="{{ request('data_a') }}">

            <button type="submit" class="btn btn-primary">
                Filtra
            </button>

            <a href="{{ route('speseRicavi.index', ['immobile_id' => $immobile_id]) }}"
               class="btn btn-secondary">
                Reset
            </a>
        </div>
    </form>

    <div>
        <ul class="list-group"
            style="flex:4; border-radius:20px; margin-top:1.5%">

            <!-- Contenuto -->
            @foreach($movimenti as $movimento)
                @php
                    $backgroundColor = $movimento->segno == '+' ? '#32CD32' : '#FF0000';
                @endphp

                <li class="list-group-item"
                    style="background-color: {{ $backgroundColor }};
                           display: grid;
                           grid-template-columns: 1fr auto 1fr auto;
                           align-items: center;">

                    <span style="font-weight: bold; text-align: left;">
                        {{ $movimento->causale }} - {{ $movimento->descrizione }}
                    </span>

                    <span style="font-weight: bold; text-align: center;">
                        {{ $movimento->data }}
                    </span>

                    <span style="font-weight: bold; text-align: right; margin-right: 10%;">
                        € {{ number_format($movimento->valore, 2, ',', '.') }}
                    </span>

                    <span style="text-align: right;">
                        <form action="{{ route('speseRicavi.delete', $movimento->id) }}"
                              method="POST"
                              onsubmit="return confirm('Sei sicuro di voler eliminare questa voce?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary btn-sm">
                                Elimina
                            </button>
                        </form>
                    </span>
                </li>
            @endforeach

            <!-- Totale -->
            <li class="list-group-item"
                style="display: grid;
                       grid-template-columns: 1fr auto 1fr auto;
                       align-items: center;
                       background-color: lightgrey;
                       font-weight: bold;">
                <span></span>
                <span></span>
                <span style="text-align: right;">
                    Totale: € {{ number_format($totale, 2, ',', '.') }}
                </span>
                <span></span>
            </li>

        </ul>
    </div>
</x-main-layout>
