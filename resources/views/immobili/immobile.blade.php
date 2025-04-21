<x-main-layout>
<h1>{{$immobile->comune}} {{$immobile->via}} {{$immobile->civico}}</h1>
<h3>locali totali: {{$immobile->locali_affittabili}}</h3>
<h3>locali affittati: {{$immobile->locali_affittati ?? 0}}</h3>
<h2>INQUILINI</h2>
<a type="button" class="btn btn-success" href="{{ route('inquilini.create',['id' => $immobile->id])}}">Inserisci inquilino</a>
@foreach($inquilini as $inquilino)
<div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s;">
      <div style="padding: 20px;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $inquilino->nome }} {{$inquilino->cognome}}</h2>
        <a type="button" class="btn btn-success" href="{{ route('inquilini.inquilino', ['id' => $inquilino->id])}}" style="width: 100px;">Anagrafica</a>
        <a type="button" class="btn btn-primary" href="{{ route('immobili.uscita', ['inquilino_id' => $inquilino->id, 'immobile_id' => $inquilino->immobile_id]) }}" style="width: 100px;">Uscita</a>
      </div>
  </div>
@endforeach
</x-main-layout>