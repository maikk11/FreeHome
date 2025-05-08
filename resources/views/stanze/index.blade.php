<x-main-layout>
    <h1 class="titolo_pagina">STANZE</h1>
    @foreach($stanze as $stanza)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s; margin-left: 1%; margin-top: 2%;">
      <div style="padding: 20px; background-color:lightgray;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">Nome stanza: {{ $stanza->nome_stanza }}</h2>
        <h2 style="margin: 0 0 10px; font-size: 24px;">Prezzo affitto: {{$stanza->prezzo_affitto}} €</h2>
        <form action="{{ route('stanze.delete', ['id' => $stanza->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                style="width:max-content; border-radius:10px;color:white; width:100px;">
                Elimina
                </button>
        </form>
      </div>
  </div>
    @endforeach
</x-main-layout>