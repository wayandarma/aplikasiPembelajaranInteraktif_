<x-layout>
    {{-- display the form on the central of the page using boostrap classes --}}

<div class="card bg-success p-5 w-50 mx-auto">

    <form action="/register" method="POST" class="w-100 d-flex flex-column">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="email" name="username" value="{{old('username')}}">
            @error('username')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
            @error('email')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
            @error('password')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>
        <div class="d-flex justify-content-between">
            <a href="/login" class="btn btn-danger">Batal</a>
            <button type="submit" class="btn btn-primary">Daftar</button>

        </div>
    </form>
</div>

</x-layout>