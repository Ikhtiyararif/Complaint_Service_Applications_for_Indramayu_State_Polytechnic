@extends('layouts.default')
@section('page-title', 'Home')
@include('includes.transparent-nav')

<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    
@section('content')
<div class="bg-local bg-cover bg-center h-screen flex items-center justify-center">
    {{-- style="background-image:url({{ url('/images/hbg.jpg') }})" --}}
<div class="px-8 pb-4 pt-32 md:px-28 md:pb-16">
    <div class="row row-cols-1 row-cols-md-2 align-items-center text-center gy-4">
        <div class="col-lg-7 d-flex flex-column text-start">
          <h2>Layanan Aspirasi, Pengaduan dan Permintaan Informasi Politeknik Negeri Indramayu</h2>
          <p>Sampaikan aspirasi, pengaduan dan permintaan informasi anda kepada unit/ bagian yang terkait</p>
          <div class="pb-8">
            <a href="/login"><button
                class="btn btn-primary uppercase font-bold rounded"
                type="button">masuk</button></a>
            <a href="/register"><button
                class="btn btn-outline-primary uppercase font-bold rounded"
                type="button">daftar</button></a>
          </div>


          {{-- <div class="pb-4">
            <div class="row row-cols-2 row-cols-md-2">
                <div class="col text-end">
                    <a href="/login"><button
                            class="btn btn-dark uppercase font-bold border-2 border-dark rounded"
                            type="button">masuk</button></a>
                </div>
                <div class="col text-start">
                    <a href="/register"><button
                            class="btn uppercase font-bold border-2 border-dark rounded"
                            type="button">daftar</button></a>
                </div>
            </div>
        </div> --}}
        {{-- <div class="d-flex items-center justify-center pb-4">
            <div class="span rounded" style="height: 2px; width: 200px; background-color: black"></div>
        </div> --}}
        </div>
        <div class="col-lg-5 d-flex flex-column text-end">
            <img src="{{ url('/images/homenew2.png') }}" class="pb-2 mx-auto w-full"  alt="...">
        </div>
        
      </div>

</div>
</div>

<div class="px-8 pb-4 pt-4 md:px-28" style="background-color: rgb(235, 234, 234)">
    <div class="text-center" style="color: black">
        <h3>Ringkasan Proses Pelaporan</h3>
    </div>
    <div class="d-flex items-center justify-center pb-2">
            <div class="span rounded" style="height: 2px; width: 310px; background-color: black"></div>
        </div>
    <div class="row row-cols-1 row-cols-md-4 align-items-center">
        <div class="col">
          <div class="card shadow text-center m-2 p-4">
              <img src="{{ url('/images/AnimasiLaporin1.png') }}" class="pb-2 mx-auto" style="height: 100px" alt="...">
              <div class="">
                  Laporkan aspirasi, pengaduan dan permintaan informasi dengan cara mengisi formulir secara baik dan benar.
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow text-center m-2 p-4">
              <img src="{{ url('/images/AnimasiLaporin4.png') }}" class="pb-2 mx-auto" style="height: 100px" alt="...">
              <div class="">
                  Laporan aspirasi, pengaduan dan permintaan informasi akan diteruskan kepada unit/ bagian yang berkaitan.
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow text-center m-2 p-4">
              <img src="{{ url('/images/AnimasiLaporin3.png') }}" class="pb-2 mx-auto" style="height: 100px" alt="...">
              <div class="">
                  Unit/ bagian yang berkaitan akan memproses laporan aspirasi, pengaduan dan permintaan informasi anda.
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow text-center m-2 p-4">
              <img src="{{ url('/images/AnimasiLaporin2.png') }}" class="pb-2 mx-auto" style="height: 100px" alt="...">
              <div class="">
                  Laporan terselesaikan, anda dapat melihat bukti penyelesaian laporan yang telah disampaikan sebelumnya.
              </div>
          </div>
        </div>
      </div>
</div>

@endsection




{{-- <div class="text-center px-8 md:px-28">
    <h2 class="text-4x1 text-center text-white pb-2">Layanan Aspirasi dan Pengaduan Politeknik Negeri Indramayu
    </h2>
    <h5 class="font-light text-center text-white pb-4">Sampaikan Aspirasi dan Pengaduan Anda kepada Politeknik
        Negeri Indramayu</h5>
    <div class="pb-4">
        <div class="row row-cols-2 row-cols-md-2">
            <div class="col text-end">
                <a href="/login"><button
                        class="btn bg-white text-black uppercase font-bold border-2 border-white rounded"
                        type="button">login</button></a>
            </div>
            <div class="col text-start">
                <a href="/register"><button
                        class="btn bg-transparent text-white uppercase font-bold border-2 border-white rounded"
                        type="button">daftar</button></a>
            </div>
        </div>
    </div>
    <div class="d-flex items-center justify-center pb-4">
        <div class="span rounded" style="height: 5px; width:30%; background-color:white;"></div>
    </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 text-black p-4">
                    <div class="card col text-center m-2 p-2">
                        <img src="{{ url('/images/AnimasiLaporin1.png') }}" class="h-full mx-auto" alt="...">
                        <div class="">
                            Ajukan Aspirasi dan Pengaduan kepada Politeknik Negeri Indramayu dengan Baik dan
                            Benar.
                        </div>
                    </div>
                    <div class="card col text-center m-2">
                        <i class=" fa-2x fa-solid fa-share-from-square"></i>
                        <div class="">
                            Ajukan Aspirasi dan Pengaduan kepada Politeknik Negeri Indramayu dengan Baik dan
                            Benar.
                        </div>
                    </div>
                    <div class="card col text-center m-2">
                        <i class=" fa-2x fa-solid fa-clock-rotate-left"></i>
                        <div class="">
                            Ajukan Aspirasi dan Pengaduan kepada Politeknik Negeri Indramayu dengan Baik dan
                            Benar.
                        </div>
                    </div>
                    <div class="card col text-center m-2">
                        <i class=" fa-2x fa-solid fa-square-check"></i>
                        <div class="">
                            Ajukan Aspirasi dan Pengaduan kepada Politeknik Negeri Indramayu dengan Baik dan
                            Benar.
                        </div>
                    </div>
                </div>
</div> --}}