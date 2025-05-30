<x-main-layout>
    <div style=" display:flex;  height: 700px; width:70%; border-radius:20px; margin-top:20px; background-color:lightgray" class="container ">
        <ul class="list-group" style="flex:4; border-radius:20px; margin-top:1.5%">
            <li class="list-group-item"><strong>Nome: </strong>{{$inquilino->nome}}</li>
            <li class="list-group-item"><strong>Cognome: </strong>{{$inquilino->cognome}}</li>
            <li class="list-group-item"><strong>Numero telefono: </strong>{{$inquilino->numero_telefono}}</li>
            <li class="list-group-item"><strong>Email: </strong>{{$inquilino->email}}</li>
            <li class="list-group-item"><strong>Carta d'identità: </strong>{{$inquilino->carta_identità}}</li>
            <li class="list-group-item"><strong>Codice fiscale: </strong>{{$inquilino->codice_fiscale}}</li>
            <li class="list-group-item"><strong>Data nascita: </strong>{{$inquilino->data_nascita}}</li>
            <li class="list-group-item"><strong>Provincia nascita: </strong>{{$inquilino->provincia_nascita}}</li>
            <li class="list-group-item"><strong>Comune nascita: </strong>{{$inquilino->comune_nascita}}</li>
            <li class="list-group-item"><strong>Provincia redisenza: </strong>{{$inquilino->provincia_residenza}}</li>
            <li class="list-group-item"><strong>Comune residenza: </strong>{{$inquilino->comune_residenza}}</li>
            <li class="list-group-item"><strong>Data subentro: </strong>{{$inquilino->data_subentro}}</li>
            <li class="list-group-item"><strong>Data uscita: </strong>{{$inquilino->data_uscita}}</li>
            <li class="list-group-item"><strong>Contratto lavorativo: </strong>{{$inquilino->contratto_lavorativo}}</li>
            <li class="list-group-item"><strong>Stanza: </strong>{{$inquilino->stanza_id}}</li>
            <li class="list-group-item"><strong>Immobile: </strong>{{$inquilino->immobile_id}}</li>
        </ul>
    </div>
    <div>
        <div style="display: flex; justify-content: center; gap: 10px; margin-top: 1%; margin-bottom: 1%;">
        <a type="button" class="btn btn-primary" style="width: 100px;" href="{{ route('inquilini.edit', ['id' => $inquilino->id]) }}">
        Modifica
        </a>
        @if($provenienza==1)
        <a type="button" class="btn btn-secondary" style="width: 100px;" href="{{ route('immobili.immobile', ['id'=>$inquilino->immobile_id])}}">
        Torna indietro
        </a>
        @else
        <a type="button" class="btn btn-secondary" style="width: 100px;" href="{{ route('inquilini.index')}}">
        Torna indietro
        </a>
        @endif
    </div>

    </div>
</x-main-layout>