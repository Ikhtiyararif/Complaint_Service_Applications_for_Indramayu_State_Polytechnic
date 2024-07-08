@extends('layouts.default')
@section('page-title', 'Form Pengaduan')
@include('includes.nav')
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
@section('content')
    <div class="px-8 pb-4 pt-32 md:px-28 md:pb-16">
        <div class="px-8 md:px-28">
            <br>
            @if (Session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card shadow-lg p-3 bg-body-tertiary rounded">
                <div class="flex items-center justify-center mb-1 pt-4">
                    <img src="{{ url('/images/laporin dark.png') }}" class="h-8" />
                </div>
                <h6 class="text-center mb-3">Layanan Aspirasi dan Pengaduan Politeknik Negeri Indramayu</h6>
                <div class="d-flex items-center justify-center mb-2">
                    <div class="span rounded" style="height: 2px; width:150px; background-color:black;"></div>
                </div>
                <div class="m-4">
                    <form class="row row-cols-1 row-cols-md-1 g-1 text-black mb-3" method="POST"
                        action="{{ route('create.laporan') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="klasifikasilaporan_id" class="form-label">Klasifikasi Laporan</label>
                            <select class="form-select" name="klasifikasilaporan_id" aria-label="Small select example">
                                @foreach ($klasifikasilaporan as $klasifikasilaporans)
                                    <option value="{{ $klasifikasilaporans->id }}">{{ $klasifikasilaporans->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ auth()->user()->name }}">
                        </div>
                        {{-- <div class="mb-4">
                            <label for="kartu" class="form-label">Kartu Identitas</label>
                            <select class="form-select" name="kartu" aria-label="Small select example">
                                <option value="0">KTP</option>
                                <option value="1">KTM</option>
                            </select>
                        </div> --}}
                        {{-- <div class="mb-4">
                            <label for="status" class="form-label">status</label>
                            <input type="number" name="status" class="form-control" id="induk"
                                placeholder="3212XXXXXXXXXX">
                        </div> --}}
                        <div class="mb-4">
                            <label for="kartu" class="form-label">Kartu</label>
                                <select class="form-select" name="kartu" aria-label="Small select example">
                                    <option value="{{ '1' }}">KTP</option>
                                    <option value="{{ '2' }}">KTM</option>
                                </select>
                        </div>
                        <div class="mb-4">
                            <label for="induk" class="form-label">Nomor Induk</label>
                            <input type="number" name="induk" class="form-control" id="induk"
                                placeholder="3212XXXXXXXXXX">
                        </div>
                        <div class="mb-4">
                            <label for="tlp" class="form-label">Telepon</label>
                            <input type="number" name="tlp" class="form-control" id="tlp"
                                value="{{ auth()->user()->tlp }}">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ auth()->user()->email }}">
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea type="text" name="alamat" class="form-control" id="alamat" placeholder=""></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="statuspelapor_id" class="form-label">Status Pelapor</label>
                            <select class="form-select" name="statuspelapor_id" aria-label="Small select example">
                                @foreach ($statuspelapor as $statuspelapors)
                                    <option value="{{ $statuspelapors->id }}">{{ $statuspelapors->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="subjeklaporan_id" class="form-label">Subjek Laporan</label>
                            <select class="form-select" name="subjeklaporan_id" aria-label="Small select example">
                                @foreach ($subjeklaporan as $subjeklaporans)
                                    <option value="{{ $subjeklaporans->id }}">{{ $subjeklaporans->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tglkejadian" class="form-label">Tanggal Kejadian</label>
                            <input type="date" name="tglkejadian" class="form-control" id="tglkejadian"
                                placeholder="tanggal kejadian">
                        </div>
                        <div class="mb-4">
                            <label for="judul" class="form-label">Judul Laporan</label>
                            <input type="text" name="judul" class="form-control" id="judul"
                                placeholder="judul laporan">
                        </div>
                        <div class="mb-4">
                            <label for="tglpelaporan" class="form-label">Tanggal Pelaporan</label>
                            <input type="date" name="tglpelaporan" class="form-control" id="tglpelaporan"
                                placeholder ="tanggal pelaporan">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label">Deskripsi Laporan</label>
                            <textarea type="text" name="description" class="form-control" rows="6" id="description" placeholder=""></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="unit_id" class="form-label">UPA/ Unit yang Dituju</label>
                            <select class="form-select" name="unit_id" aria-label="Small select example">
                                @foreach ($unit as $units)
                                    <option value="{{ $units->id }}">{{ $units->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="form-label">Bukti Pendukung</label>
                            <input class="form-control" name="image" type="file"
                                accept="image/png, image/jpeg, image/jpg" id="image">
                            <div class="" style="color: red">* Upload file dengan format<span class="fst-italic">
                                    .jpg, .jpeg atau .png</span></div>
                        </div>
                        <div class="mb-2 text-center">
                            <button class="btn text-white" type="submit" style="background-color: blue">Upload</button>
                        </div>

                        {{-- <label for="email" class="form-label">Bukti Pendukung</label>
                    <div class="row row-cols row-cols-md-2">
                        <div class="mb-4">
                        <div class="col text-start">
                                <input type="file" name="email" class="form" id="email">
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <div class="col text-end">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                    </div>
                    </div> --}}
                    </form>
                </div>



                {{-- <div id="" class="form-text text-center">Sudah memiliki akun? <a href="/login">Login
                    Sekarang</a></div> --}}
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
