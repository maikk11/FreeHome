<x-main-layout>
<h1 class="titolo_pagina">{{$immobile->comune}} {{$immobile->via}} {{$immobile->civico}}</h1>
<h3 class="titolo_pagina">locali totali: {{$immobile->locali_affittabili}}</h3>
<h3 class="titolo_pagina">locali affittati: {{$immobile->locali_affittati ?? 0}}</h3>
<h2 class="titolo_pagina" style="margin-top:2%">INQUILINI</h2>
<a type="button" class="btn btn-success" href="{{ route('inquilini.create',['id' => $immobile->id])}}" style="margin-left:1%">Inserisci inquilino</a>
@foreach($inquilini as $inquilino)
<div style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s; margin-left:1%; margin-top:1%">
    <div style="padding: 20px; background-color:lightgray;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $inquilino->nome }} {{$inquilino->cognome}}</h2>
        <a type="button" class="btn btn-success" href="{{ route('inquilini.inquilino', ['id' => $inquilino->id])}}" style="width: 100px;">Anagrafica</a>
        <!-- Aggiungi un attributo data-id per ciascun bottone "Uscita" -->
        <a type="button" class="btn btn-primary uscita-button" data-inquilino-id="{{ $inquilino->id }}" style="width: 100px;">Uscita</a>
    </div>
</div>
@endforeach

<script>
// Seleziona tutti i bottoni con la classe 'uscita-button'
document.querySelectorAll('.uscita-button').forEach(button => {
    button.addEventListener('click', function() {
        let inquilinoId = this.getAttribute('data-inquilino-id'); // Ottieni l'ID dell'inquilino dal data attribute
        let data = prompt("Inserisci la data di uscita (formato DD-MM-YYYY):");

        if (data) {
            // Costruisci l'URL con l'ID dell'inquilino e la data
            let url = "{{ route('immobili.uscita', ['inquilino_id' => '__inquilino_id__', 'immobile_id' => $immobile->id, 'data' => '__data__']) }}";
            url = url.replace('__inquilino_id__', inquilinoId);  // Sostituisci '__inquilino_id__' con l'ID dell'inquilino
            url = url.replace('__data__', data);  // Sostituisci '__data__' con la data inserita
            window.location.href = url;  // Reindirizza
        }
    });
});
</script>

</x-main-layout>
