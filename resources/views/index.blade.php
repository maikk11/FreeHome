<x-main-layout>
    @if(auth()->check() && auth()->user())
    <h1 class="titolo_pagina">Bentornato {{ auth()->user()->name }}</h1>
    @else
    <h1 class="titolo_pagina">Benvenuto</h1>
    @endif
</x-main-layout>