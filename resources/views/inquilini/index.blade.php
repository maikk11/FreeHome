<x-main-layout>
    <h1 class="titolo_pagina">INQUILINI</h1>
    @if($immobile_id==0)
    <a type="button" class="btn btn-primary" href="{{ route('inquilini.create','0')}}" style="margin-left:1%; margin-bottom:1%">Inserisci inquilino</a>
    @else
    <a href="{{ route('immobili.immobile', ['id' => $immobile_id]) }}" class="btn btn-secondary" style="margin-left:1%">Torna indietro</a>
    @endif
    @foreach($inquilini as $inquilino)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s; margin-left:1%; margin-top: 2%;">
      <div style="padding: 20px; background-color:lightgray;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $inquilino->nome }} {{$inquilino->cognome}}</h2>
        @if($immobile_id==0)
        <a type="button" class="btn btn-success" href="{{ route('inquilini.inquilino', ['id' => $inquilino->id, 'provenienza'=>0])}}" style="width: 100px;">Anagrafica</a>
        <form id="delete-form-{{ $inquilino->id }}" action="{{ route('inquilini.delete', ['id' => $inquilino->id]) }}" method="POST"  style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="button"
        style="width:max-content; border-radius:10px;color:white; margin-left:8px"
        onclick="confirmDelete('{{ $inquilino->id }}')">Elimina</button>
        </form>
        @else
        <a type="button" class="btn btn-warning" href="{{ route('inquilini.inquilino', ['id' => $inquilino->id, 'provenienza'=>0])}}" style="width: 100px;">Assegna</a>
        <form method="POST" action="{{ route('inquilini.delete', ['id' => $inquilino->id]) }}" style="display:inline;">
        @endif
      </div>
  </div>
    @endforeach
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Eliminare inquilino?',
            text: "Questa azione non può essere annullata!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e80808',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sì, elimina!',
            cancelButtonText: 'Annulla'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
</x-main-layout>