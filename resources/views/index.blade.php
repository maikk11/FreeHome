<x-main-layout>
    @if(auth()->check() && auth()->user())
    <h1 class="titolo_pagina">Bentornato {{ auth()->user()->name }}</h1>
    <div class="d-flex flex-column align-items-center justify-content-center text-center" style="margin-top: 5%;">
    <a href="{{ route('immobili.index') }}" class="btn btn-secondary btn-lg mb-3 w-75 w-md-50">
        IMMOBILI
    </a>
    <a href="{{ route('inquilini.index', ['id' => 0]) }}" class="btn btn-secondary btn-lg w-75 w-md-50">
        INQUILINI
    </a>
    <a href="{{ route('causaliSpeseRicavi.index') }}" class="btn btn-secondary btn-lg w-75 w-md-50" style="margin-top: 1%;">
        CAUSALI
    </a>
    </div>

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