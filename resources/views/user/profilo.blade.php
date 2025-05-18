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
    <div style="position: absolute; left:10%; margin-top:1%">
        <a type="button" class="btn btn-primary" style="width: 100px;" href="{{ route('profili.edit', ['id' => $profilo->id]) }}">Modifica</a>
        <form method="POST" action="{{ route('profili.delete', ['id' => auth()->user()->id]) }}" style="display:inline;" id="delete-form-{{ auth()->user()->id }}">
        @csrf
        @method('DELETE')
            <button class="btn btn-danger" type="button"
            style="width:max-content; border-radius:10px; color:white; margin-left:8px" onclick="confirmDelete('{{ auth()->user()->id }}')">Elimina</button>
        </form>
    </div>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Eliminare profilo?',
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