<x-main-layout>
<h1>{{$immobile->comune}} {{$immobile->via}} {{$immobile->civico}}</h1>
<h3>locali totali: {{$immobile->locali_affittabili}}</h3>
<h3>locali affittati: {{$immobile->locali_affittati ?? 0}}</h3>
<h2>INQUILINI</h2>
<a type="button" class="btn btn-success" href="{{ route('inquilini.create',['id' => $immobile->id])}}">Inserisci inquilino</a>
</x-main-layout>