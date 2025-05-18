<x-main-layout>
    @if(auth()->check() && auth()->user())
    <h1 class="titolo_pagina">Bentornato {{ auth()->user()->name }}</h1>
    <a href="{{ route('immobili.index') }}" class="btn btn-primary">
    Immobili
    </a>
    <a href="{{ route('inquilini.index', ['id' => 0]) }}" class="btn btn-primary">
    Inquilini
    </a>
    @else
    <h1 class="titolo_pagina">Benvenuto</h1>
    <form action="/login" method="POST" class="mt-5 mx-auto col-lg-6">
    @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            @error('email') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-text">Non sei registrato?<a class="form-text" href="{{ route('register')}}"> Clicca qui</a></div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endif
</x-main-layout>