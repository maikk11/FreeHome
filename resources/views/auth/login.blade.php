<x-main-layout>
    <form action="/login" method="POST" class="mt-5 mx-auto col-lg-6">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-text">Non sei registrato?<a class="form-text" href="{{ route('register')}}"> Clicca qui</a></div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-main-layout>