<x-main-layout>
    @if(auth()->check() && auth()->user())
    <h1>Bentornato {{ auth()->user()->name }}</h1>
    @else
    <h1>Benvenuto</h1>
    @endif
</x-main-layout>