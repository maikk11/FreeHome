<x-main-layout>
    <h1 class="titolo_pagina">STANZE</h1>
    <a href="{{ route('immobili.immobile', ['id' => $immobile_id]) }}" class="btn btn-secondary" style="margin-left:1%">Torna indietro</a>

    @foreach($stanze as $stanza)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s; margin-left: 1%; margin-top: 2%;">
      <div style="padding: 20px; background-color:lightgray;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">Nome stanza: {{ $stanza->nome_stanza }}</h2>
        <h2 style="margin: 0 0 10px; font-size: 24px;">Prezzo affitto: {{$stanza->prezzo_affitto}} €</h2>
        <a type="button" class="btn btn-success" style="width: 100px; margin-top:1%; margin-bottom:1%" href="{{ route('stanze.storico', ['id' => $stanza->id]) }}">Storico</a>
        <a type="button" class="btn btn-primary" style="width: 100px; margin-top:1%; margin-bottom:1%" href="{{ route('stanze.edit', ['id' => $stanza->id]) }}">Modifica</a>
        <form action="{{ route('stanze.delete', ['id' => $stanza->id]) }}" method="POST" style="display:inline;" id="delete-form-{{ $stanza->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="button"
                style="width:max-content; border-radius:10px;color:white; width:100px;" onclick="confirmDelete('{{ $stanza->id }}')">
                Elimina
                </button>
        </form>
      </div>
  </div>
    @endforeach
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Eliminare stanza?',
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