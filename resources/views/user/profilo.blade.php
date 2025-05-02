<x-main-layout>
    <h1 class="titolo_pagina">Profilo {{ auth()->user()->name }}</h1>
    <div style=" display:flex;  height: 100%; width:100%; border-radius:20px; margin-top:20px; background-color:lightgray" class="container ">
        <ul class="list-group" style="flex:4; border-radius:20px; margin-top:1.5%">
            <li class="list-group-item"><strong>Nome: </strong>{{$profilo->name}}</li>
            <li class="list-group-item"><strong>Cognome: </strong>{{$profilo->surname}}</li>
            <li class="list-group-item"><strong>Email: </strong>{{$profilo->email}}</li>
            <li class="list-group-item"><strong>Data nascita: </strong>{{$profilo->birth}}</li>
            <li class="list-group-item"><strong>Creazione profilo: </strong>{{$profilo->created_at}}</li>
        </ul>
    </div>
</x-main-layout>