<x-main-layout>
    <h1>INQUILINI</h1>
    @foreach($inquilini as $inquilino)
    <div style="background: white; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; width: 300px; transition: transform 0.3s, box-shadow 0.3s;">
      <div style="padding: 20px;">
        <h2 style="margin: 0 0 10px; font-size: 24px;">{{ $inquilino->nome }} {{$inquilino->cognome}}</h2>
        <a type="button" class="btn btn-success" href="{{ route('inquilini.inquilino', ['id' => $inquilino->id])}}" style="width: 100px;">Entra</a>
      </div>
  </div>
    @endforeach
</x-main-layout>