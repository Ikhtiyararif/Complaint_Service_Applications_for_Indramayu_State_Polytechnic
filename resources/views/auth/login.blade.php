@extends('layouts.default')
@section('page-title', 'Login')
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">

@if (Session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session()->has('loginerror'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginerror') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- <div class="bg-local bg-cover bg-center h-screen" style="background-image:url({{ url('/images/hbg.jpg') }})"> --}}
{{-- <div class="h-screen flex items-center justify-center"> --}}
<div class="h-screen flex items-center justify-center">
    <div class="px-8 pb-4 md:px-28 md:pb-16">
        <div class="row row-cols-1 row-cols-md-2 align-items-center text-center gy-4">
            <div class="col-lg-6 d-flex flex-column text-start">
                <form class="p-8 md:px-28" action="/login" method="post">
                    @csrf
                    {{-- <div class="flex items-center justify-center mb-2">
                        <img src="{{ url('/images/laporin dark.png') }}" class="h-8" />
                    </div> --}}
                    {{-- <div class="d-flex items-center justify-center mb-2">
                        <div class="span rounded" style="height: 2px; width:100px; background-color:black;"></div>
                    </div> --}}
                    <h4 class="text-center">Halo, selamat datang</h4>
                    <p class="text-center mb-3">Masuk ke akun anda untuk memulai.</p>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email"
                            class="focus:outline-1 w-full py-2 px-2 text-black placeholder-black border rounded border-black @error('email') is-invalid @enderror"
                            style="background-color: rgb(220, 217, 217)" id="email"
                            value="{{ old('email') }}" placeholder="example@gmail.com">
                        @error('email')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="focus:outline-1 w-full py-2 px-2 text-black placeholder-black border rounded border-black"
                            style="background-color: rgb(220, 217, 217)" id="password" placeholder="********">
                    </div>
                    <div class="text-center mb-2">
                        <button type="submit" class="btn btn-primary text-white">Masuk</button>
                    </div>
                    <div id="" class="form-text text-center">Belum memiliki akun? <a href="/register">Daftar
                            Sekarang</a></div>
                </form>
            </div>
            <div class="col-lg-6 d-flex flex-column">
                <div class="px-8 md:px-28">
                    <img src="{{ url('/images/login2.png') }}" class="pb-2 mx-auto w-full" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
<script script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: "error",
            text: '{{ $message }}',
        });
    </script>
@endif


{{-- <div class="block text-black">
  <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 20rem;">
      <div class="card-body">
          <div class="flex items-center justify-center mb-2">
          <img src="{{url('/images/laporin dark.png')}}" class="h-8" />
          </div>
          <div class="mb-2">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="text-center mb-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div id="" class="form-text text-center">Belum memiliki akun? <a href="/register">Daftar Sekarang</a></div>
      </div>
    </div>
</div> --}}
