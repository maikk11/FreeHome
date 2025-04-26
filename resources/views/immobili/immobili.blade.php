<x-main-layout>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1 class="titolo_pagina">IMMOBILI</h1>
    <a type="button" class="btn btn-success" href="{{ route('immobili.create')}}" style="margin-left: 1%; margin-top: 1%;">Inserisci immobile</a>
    @foreach($immobili as $immobile)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s; margin-left: 1%; margin-top: 2%;">
      <div style="padding: 20px; background-color:lightgray;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">Comune: {{ $immobile->comune }}</h2>
        <h2 style="margin: 0 0 10px; font-size: 24px;">Indirizzo: {{$immobile->via}} {{$immobile->civico}}</h2>
        <a type="button" class="btn btn-success" href="{{ route('immobili.immobile', ['id' => $immobile->id])}}" style="width: 100px;">Entra</a>
        <form id="delete-form-{{ $immobile->id }}" action="{{ route('immobili.delete', ['id' => $immobile->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger"
                style="width:max-content; border-radius:10px;color:white; width:100px;"
                onclick="confirmDelete('{{ $immobile->id }}')">
                Elimina
                </button>
        </form>
      </div>
  </div>
    @endforeach
    <script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Eliminare immobile?',
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