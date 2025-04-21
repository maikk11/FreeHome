<x-main-layout>
    <div style=" display:flex;  height: 700px; width:100%; background-color:#6CA7DD; border-radius:20px; margin-top:20px" class="container ">
        <div style="flex:3; ">
            <img style=" width:90%; height:70%; border-top-left-radius:20px;border-bottom-left-radius:20px; box-shadow: 4px 4px 8px rgba(0, 36, 12, 1.5);"
                src="https://img.freepik.com/premium-vector/male-profile-flat-blue-simple-icon-with-long-shadowxa_159242-10092.jpg"
                alt="">
        </div>
        <ul class="list-group" style="flex:4; border-radius:20px">
            <li class="list-group-item"><strong>Nome:</strong>{{$inquilino->nome}}</li>
            <li class="list-group-item"><strong>Cognome:</strong>{{$inquilino->cognome}}</li>
            <li class="list-group-item"><strong>Numero telefono:</strong>{{$inquilino->numero_telefono}}</li>
            <li class="list-group-item"><strong>Email:</strong>{{$inquilino->email}}</li>
            <li class="list-group-item"><strong>Carta d'identità:</strong>{{$inquilino->carta_identità}}</li>
            <li class="list-group-item"><strong>Codice fiscale:</strong>{{$inquilino->codice_fiscale}}</li>
            <li class="list-group-item"><strong>Data nascita:</strong>{{$inquilino->data_nascita}}</li>
            <li class="list-group-item"><strong>Provincia nascita:</strong>{{$inquilino->provincia_nascita}}</li>
            <li class="list-group-item"><strong>Comune nascita:</strong>{{$inquilino->comune_nascita}}</li>
            <li class="list-group-item"><strong>Provincia redisenza:</strong>{{$inquilino->provincia_residenza}}</li>
            <li class="list-group-item"><strong>Comune residenza:</strong>{{$inquilino->comune_residenza}}</li>
            <li class="list-group-item"><strong>Data subentro:</strong>{{$inquilino->data_subentro}}</li>
            <li class="list-group-item"><strong>Data uscita:</strong>{{$inquilino->data_uscita}}</li>
            <li class="list-group-item"><strong>Contratto lavorativo:</strong>{{$inquilino->contratto_lavorativo}}</li>
            <li class="list-group-item"><strong>Stanza:</strong>{{$inquilino->numero_stanza}}</li>
            <li class="list-group-item"><strong>Immobile:</strong>{{$inquilino->immobile_id}}</li>
        </ul>
    </div>
</x-main-layout>