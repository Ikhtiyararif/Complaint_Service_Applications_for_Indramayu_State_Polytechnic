@extends('admin.layouts.unit')
@section('page-title', 'Teknik Informatika')

{{-- @include('admin.includes.sidebar') --}}
<link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
<link rel="stylesheet" href="assets/css/main.css">
@section('content')

    <div class="p-4">
        <div class="row mb-4">
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg bg-primary">
                    <div class="p-4 text-white">Data masuk {{ $jumlahinformatika }}</div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg bg-success">
                    <div class="p-4 text-white">Data terselesaikan {{ $jumlahinformatika }}</div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card shadow-lg bg-warning">
                    <div class="p-4 text-white">Data belum terselesaikan {{ $jumlahinformatika }}</div>
                </div>
            </div>
        </div>

        <div class="card shadow-lg p-3 bg-body-tertiary p-4">
            <div class="mb-3">
                <a href="" class="" data-bs-toggle="modal" data-bs-target="#createTentangLaporin">Laporan
                    Masuk</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped text-center table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Status Pelapor</th>
                            <th scope="col">Subjek Laporan</th>
                            {{-- <th scope="col">UPA Tujuan</th> --}}
                            <th scope="col">Judul</th>
                            {{-- <th scope="col">Deskripsi</th> --}}
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporan as $laporans)
                            @if ($laporans->unit_id == '5')
                                <tr>
                                    <td class="p-2">{{ $laporans->name }}</td>
                                    <td class="p-2">{{ $laporans->statuspelapor->title }}</td>
                                    <td class="p-2">{{ $laporans->subjeklaporan->title }}</td>
                                    {{-- <td class="p-2">{{ substr($laporans->unit->name, 0, 20) . ' ... ' }}</td> --}}
                                    <td class="p-2">{{ substr($laporans->judul, 0, 20) . ' ... ' }}</td>
                                    {{-- <td class="p-2">{{ substr($laporans->description, 0, 20) . ' ... ' }}</td> --}}
                                    <td class="p-2">
                                            @if ($laporans->status == '0')
                                                <strong class="btn btn-danger">Tersampaikan</strong>
                                            @elseif ($laporans->status == '1')
                                                <strong class="btn bg-warning">Diproses</strong>
                                            @else()
                                                <a class="bg-success rounded p-1 text-white">Terselesaikan</a>
                                            @endif
                                    </td>
                                    <td class="p-2">
                                        <a href="" class="btn bg-info btn-sm text-white mr-2" data-bs-toggle="modal"
                                            data-bs-target="{{ '#detailTentangLaporin' . $laporans->id }}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>

                                        <a href="" class="btn bg-success btn-sm text-white mr-2"
                                            data-bs-toggle="modal" data-bs-target="{{ '#uploadbukti' . $laporans->id }}">
                                            <i class="fa-solid fa-upload"></i>
                                        </a>

                                        <div class="modal fade" id="{{ 'uploadbukti' . $laporans->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="uploadbuktiLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form class="modal-content" method="POST" action="">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="uploadbuktiLabel">Upload bukti
                                                            penyelesaian laporan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                        <div class="mb-2">
                                                            <label for="floatingTextarea2">Deskripsi</label>
                                                            <textarea class="form-control" placeholder="Berikan deskripsi/ penjelasan mengenai laporan yang telah diselesaikan" id="floatingTextarea2"
                                                                style="height: 200px"></textarea>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="image" class="form-label">Bukti Pendukung</label>
                                                            <input type="file" id="image" name="image"
                                                                class="form-control"
                                                                accept="image/png, image/jpeg, image/jpg" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="" id="pagination">{{ $laporan->onEachSide(3)->links() }}</div>
            </div>

        </div>
    </div>

@endsection
