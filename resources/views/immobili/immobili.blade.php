<x-main-layout>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1>IMMOBILI</h1>
    <a type="button" class="btn btn-success" href="{{ route('immobili.create')}}">Inserisci immobile</a>
    @foreach($immobili as $immobile)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s;">
      <div style="padding: 20px;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $immobile->comune }} {{$immobile->via}} {{$immobile->civico}}</h2>
        <a type="button" class="btn btn-success" href="{{ route('immobili.immobile', ['id' => $immobile->id])}}" style="width: 100px;">Entra</a>
        <form id="delete-form-{{ $immobile->id }}" action="{{ route('immobili.delete', ['id' => $immobile->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-primary"
                style="background: #e80808; width:max-content; border-radius:10px;color:white; width:100px; margin-top:10px"
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