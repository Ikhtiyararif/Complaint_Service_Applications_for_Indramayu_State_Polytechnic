@extends('layouts.default')
@section('page-title', 'Register')
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">

<div class="h-screen flex items-center justify-center">
        <div class="px-8 pb-4 md:px-28 md:pb-16">
            <div class="row row-cols-1 row-cols-md-2 align-items-center text-center gy-4">
                <div class="col-lg-6 d-flex flex-column text-start">
                    <form class="p-8 md:px-28" action="/register" method="post">
                        @csrf
                        <div class="flex items-center justify-center mb-2">

                        </div>
                        <h4 class="text-center">Halo, selamat datang</h4>
                        <p class="text-center mb-3">Daftarkan diri anda untuk bergabung.</p>
                        <div class="row row-cols-1 row-cols-md-2 g-2 text-black">
                            <div class="col">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" class="focus:outline-1 w-full py-2 px-2 text-black placeholder-black border rounded border-black @error('name') is-invalid @enderror" style="background-color: rgb(220, 217, 217)"
                                        id="name" placeholder="input nama anda" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid_feedback" style="color: red">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="tlp" class="form-label">Telepon</label>
                                    <input type="number" name="tlp" class="focus:outline-1 w-full py-2 px-2 text-black placeholder-black border rounded border-black @error('tlp') is-invalid @enderror" style="background-color: rgb(220, 217, 217)"
                                        id="tlp" placeholder="08XX XXXX XXXX" value="{{ old('tlp') }}">
                                    @error('tlp')
                                        <div class="invalid_feedback" style="color: red">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="focus:outline-1 w-full py-2 px-2 text-black placeholder-black border rounded border-black @error('email') is-invalid @enderror" style="background-color: rgb(220, 217, 217)"
                                        id="email" aria-describedby="emailHelp" placeholder="example@gmail.com" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid_feedback" style="color: red">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="focus:outline-1 w-full py-2 px-2 text-black placeholder-black border rounded border-black @error('password') is-invalid @enderror" style="background-color: rgb(220, 217, 217)"
                                        id="password" placeholder="*********">
                                    @error('password')
                                        <div class="invalid_feedback" style="color: red">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                
                        <div class="text-center mb-2">
                            <button type="submit" class="btn btn-primary text-white">Daftar</button>
                        </div>
                        <div id="" class="form-text text-center">Sudah memiliki akun? <a href="/login">Masuk
                                Sekarang</a></div>
                    </form>
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <div class="px-8 md:px-28">
                        <img src="{{ url('/images/register.png') }}" class="pb-2 mx-auto w-full" alt="...">
                    </div>
                </div>
            </div>

</div>
</div>

<script script src = "https://cdn.jsdelivr.net/npm/sweetalert2@11" ></script>

@if(session()->has('success'))
<script>
    Swal.fire({
        icon: "success",
        text: '{{ session('success') }}',
    });
</script>
@endif
{{-- <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" >
</div> --}}
