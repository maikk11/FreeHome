<x-main-layout>
    <h1>IMMOBILI</h1>
    <a type="button" class="btn btn-success" href="{{ route('immobili.create')}}">Inserisci immobile</a>
    @foreach($immobili as $immobile)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s;">
      <div style="padding: 20px;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $immobile->comune }} {{$immobile->via}} {{$immobile->civico}}</h2>
        <a type="button" class="btn btn-success" href="{{ route('immobili.create')}}">Entra</a>
        <a type="button" class="btn btn-danger" href="{{ route('immobili.delete', ['id' => $immobile->id]) }}">Elimina</a>
      </div>
  </div>
    @endforeach
</x-main-layout>