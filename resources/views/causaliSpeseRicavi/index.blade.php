<x-main-layout>
    <h1 class="titolo_pagina">CAUSALI SPESE E RICAVI</h1>
    <a href="{{ route('causaliSpeseRicavi.create')}}" class="btn btn-primary" style="margin-left:1%">Inserisci causale</a>
    @foreach($causali as $causale)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s; margin-left: 1%; margin-top: 2%;">
      <div style="padding: 20px; background-color:lightgray;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $causale->causale }}</h2>
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $causale->descrizione }}</h2>
        <form id="delete-form-{{ $causale->id }}" action="{{ route('causaliSpeseRicavi.delete', ['id' => $causale->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger"
                style="width:max-content; border-radius:10px;color:white; width:100px;"
                onclick="confirmDelete('{{ $causale->id }}')">
                Elimina
                </button>
        </form>
      </div>
  </div>
    @endforeach
 <script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Eliminare causale?',
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