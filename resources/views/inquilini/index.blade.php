<x-main-layout>
    <h1 class="titolo_pagina">INQUILINI</h1>
    @foreach($inquilini as $inquilino)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s; margin-left:1%">
      <div style="padding: 20px; background-color:lightgray;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $inquilino->nome }} {{$inquilino->cognome}}</h2>
        <a type="button" class="btn btn-success" href="{{ route('inquilini.inquilino', ['id' => $inquilino->id])}}" style="width: 100px;">Anagrafica</a>
        <form method="POST" action="{{ route('inquilini.delete', ['id' => $inquilino->id]) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn"
        style="background: #e80808; width:max-content; border-radius:10px;color:white; margin-left:8px"
        type="submit">Elimina</button>
         </form>
      </div>
  </div>
    @endforeach
</x-main-layout>