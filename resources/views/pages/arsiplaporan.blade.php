@extends('layouts.default')
@section('page-title', 'Arsip Laporan')
@include('includes.nav')
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
@section('content')
    <div class="px-8 pb-4 pt-32 md:px-28 md:pb-16">
        <div class="px-8 md:px-28">
            <br>
            <h5 class="mb-4">Arsip Laporan</h5>
            @foreach ($laporan as $lapor)
                <div class="card shadow p-4 mb-4">
                    <div class="text-dark">
                        <div class="inset-x-0 top-0 flex flex-row justify-between items-center z-10 text-dark pb-4">
                            <div class="col">
                                {{-- <img src="{{ url(Storage::url($lapor->image)) }}" title="" class="h-16 mx-auto" /> --}}
                                <div class="fs-4 fw-semibold">{{ $lapor->name }}</div>
                                <div class="font-light" style="color: gray">{{ $lapor->statuspelapor->title }}</div>
                            </div>
                            <div class="col text-end">
                                {{-- date('d-m-Y', strtotime($item->created_at)) --}}
                                <p class="fs-6"><i class="fa-regular fa-calendar"></i>
                                    {{ date('D, d-m-Y', strtotime($lapor->tglpelaporan)) }}</p>
                            </div>
                        </div>

                        <div class="fs-5 fw-semibold pb-2">{{ $lapor->judul }}</div>
                        <div class="pb-2">{{ $lapor->description }}</div>
                        <div class="pb-2"><i class="fa-regular fa-calendar"></i> Tanggal Kejadian:
                            {{ date('D, d-m-Y', strtotime($lapor->tglkejadian)) }}</div>
                        <div class="pb-2">Status:
                            @if ($lapor->status == '0')
                                <strong>Tersampaikan</strong>
                            @elseif ($lapor->status == '1')
                                <strong>Diproses</strong>
                            @else()
                                <strong>Terselesaikan</strong>
                            @endif
                            {{-- <strong>{{ $lapor->status == '0' ? 'Tersampaikan' : 'Terselesaikan' }}</strong> --}}
                        </div>
                        <div class="row pb-2">
                            <div class="col">
                                <a href="" class="" data-bs-toggle="modal"
                                    data-bs-target="{{ '#detailLaporan' . $lapor->id }}">Detail Laporan</a>
                            </div>
                            <div class="col text-end">
                                @if ($lapor->status == '2')
                                    <a href="" class="">Lihat bukti penyelesaian laporan</a>
                                @endif
                            </div>
                        </div>




                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Launch static backdrop modal
                        </button> --}}

                        <!-- Modal -->
                        <div class="modal fade" id="{{ 'detailLaporan' . $lapor->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailLaporanLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="detailLaporanLabel">Detail Laporan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="pb-2">Nama Pelapor: {{ $lapor->name }}</div>
                                        <div class="pb-2">Email: {{ $lapor->email }}</div>
                                        <div class="pb-2">Nomor Induk: {{ $lapor->induk }}</div>
                                        <div class="pb-2">Telepon: {{ $lapor->tlp }}</div>
                                        <div class="pb-2">Status Pelapor: {{ $lapor->statuspelapor->title }}</div>
                                        <div class="pb-2">Tgl Kejadian:
                                            {{ date('D, d-m-Y', strtotime($lapor->tglkejadian)) }}</div>
                                        <div class="pb-2">Tgl Pelaporan:
                                            {{ date('D, d-m-Y', strtotime($lapor->tglpelaporan)) }}</div>
                                        <div class="pb-2">Klasifikasi Laporan: {{ $lapor->klasifikasilaporan->title }}
                                        </div>
                                        <div class="pb-2">Subjek Laporan: {{ $lapor->subjeklaporan->title }}</div>
                                        <div class="pb-2">Judul Laporan: {{ $lapor->judul }}</div>
                                        <div class="pb-2">Deskripsi: {{ $lapor->description }}</div>
                                        <div class="pb-2">UPA yang dituju: {{ $lapor->unit->name }}</div>
                                        <div class="pb-2">Status Laporan:
                                            @if ($lapor->status == '0')
                                                <strong>Tersampaikan</strong>
                                            @elseif ($lapor->status == '1')
                                                <strong>Diproses</strong>
                                            @else()
                                                <strong>Terselesaikan</strong>
                                            @endif
                                        </div>
                                        <div class="pb-2">Foto Terlampir: <img
                                                src="{{ url(Storage::url($lapor->image)) }}" title="" class="mx-auto"
                                                style="height: 200px" /></div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    @include('includes.footer')
@endsection
