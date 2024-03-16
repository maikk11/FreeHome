<x-main-layout>
    <form action="/register" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
            @error('surname') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Data di nascita</label>
            <input type="date" class="form-control" id="birth" name="birth" value="{{ old('birth') }}">
            @error('birth') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
            @error('password') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation') <span class="small text-danger">{{$message}}</span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-main-layout>