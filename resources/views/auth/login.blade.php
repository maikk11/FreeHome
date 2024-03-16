<x-main-layout>
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
</x-main-layout>