@extends('layouts.default')
@section('page-title', 'Tentang Laporin')
@include('includes.nav')

@section('content')
    <div class="px-8 pb-4 pt-32 md:px-28 md:pb-16">
        <br>
        <div class="mb-2"><a href="{{ url()->previous() }}" class="text-decoration-none text-black"><i class="fa-solid fa-angle-left"></i> Kembali</a></div>
        <br>
        @foreach ($tentanglaporin as $tentanglaporins)
            <div class="px-8 md:px-28">
                <h3 class="text-black font-bold pb-2">{{ $tentanglaporins->title }}</h3>
                <div class="text-start pb-2">
                    <img src="{{ url(Storage::url($tentanglaporins->image)) }}" title="" class="h-16 mx-auto" />
                </div>
                <p class="fs-5 pb-4" style="text-indent: 50px">{{ $tentanglaporins->description }}</p>
            </div>
        @endforeach
    </div>
    @include('includes.footer')
@endsection
