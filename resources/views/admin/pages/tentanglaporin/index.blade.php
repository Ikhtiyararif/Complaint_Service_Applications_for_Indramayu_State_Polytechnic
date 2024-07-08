@extends('admin.layouts.default')
@section('page-title', 'Tentang Laporin')

@section('content')
    <div class="p-2">
        <div class="card shadow-lg p-3 bg-body-tertiary p-4">
            @if (Session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (Session()->has('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (Session()->has('update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="mb-3">
                <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#createTentangLaporin"><i class="fa-solid fa-plus"></i> Tentang Laporin</a>
            </div>

            <form id="search" action="{{ route('admin.tentanglaporin') }}" method="GET"
                class="input-group input-group-sm mb-3 w-25">
                <input id="keyword" name="keyword" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm" placeholder="Search Tentang Laporin">
                <button class="input-group-text" id="inputGroup-sizing-sm" type="submit"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>


            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button> --}}

            <!-- Modal -->
            <div class="modal fade" id="createTentangLaporin" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="createTentangLaporinLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form class="modal-content" method="POST" action="{{ route('pages.add.tentanglaporin') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="createTentangLaporinLabel">Create Tentang Laporin</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="">
                            </div>
                            <div class="">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control"
                                    accept="image/png, image/jpeg, image/jpg" placeholder="">
                            </div>
                            <div class="">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control" placeholder="" style="height: 200px"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped text-center table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tentanglaporin as $tentanglaporins)
                            <tr>
                                <th class="p-2" scope="row">{{ $loop->iteration }}</th>
                                <td class="p-2">{{ $tentanglaporins->title }}</td>
                                <td class="p-2"><a href="{{ Storage::url($tentanglaporins->image) }}" target="_blank"
                                        rel="noopener noreferrer"><img
                                            src="{{ url(Storage::url($tentanglaporins->image)) }}" alt=""
                                            title="" class="h-8 mx-auto" /></a></td>
                                <td class="p-2">{{ substr($tentanglaporins->description, 0, 50) . ' ... ' }}</td>
                                <td class="p-2">
                                    <a href="" class="btn bg-warning btn-sm text-white mr-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="{{ '#updateTentangLaporin' . $tentanglaporins->id }}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>

                                    <a href="" class="btn bg-info btn-sm text-white mr-2" data-bs-toggle="modal"
                                        data-bs-target="{{ '#detailTentangLaporin' . $tentanglaporins->id }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    {{-- <a href="" class="btn bg-info btn-sm text-white mr-2">
                                    <i class="fa-solid fa-eye"></i>
                                </a> --}}

                                    <a href="" class="btn bg-danger btn-sm text-white" data-bs-toggle="modal"
                                        data-bs-target="{{ '#deleteTentangLaporin' . $tentanglaporins->id }}">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>

                                    {{-- Edit Modal --}}
                                    <div class="modal fade" id="{{ 'updateTentangLaporin' . $tentanglaporins->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="updateTentangLaporinLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <form class="modal-content" method="POST"
                                                action="{{ route('pages.update.tentanglaporin', ['id' => $tentanglaporins->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="updateTentangLaporinLabel">Edit Tentang Laporin</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-start pb-4">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" name="title" class="form-control"
                                                            id="title"
                                                            value="{{ old('title', $tentanglaporins->title) }}">
                                                    </div>
                                                    <div class="text-start pb-4">
                                                        <label class="form-label">Current image</label>
                                                        <img src="{{ url(Storage::url($tentanglaporins->image)) }}" alt="" title="" class="h-8" />
                                                    </div>
                                                    <div class="text-start pb-4">
                                                        <label for="image" class="form-label">Image</label>
                                                        <input type="file" id="image" name="image" class="form-control" accept="image/png, image/jpeg, image/jpg" placeholder="">
                                                    </div>
                                                    <div class="text-start pb-4">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea name="description" class="form-control" id="description" style="height: 200px">{{ old('description', $tentanglaporins->description) }}</textarea>
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

                                    {{-- Delete Modal --}}
                                    <div class="modal fade" id="{{ 'deleteTentangLaporin' . $tentanglaporins->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="deleteTentangLaporinLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form class="modal-content" method="POST"
                                                action="{{ route('pages.delete.tentanglaporin', ['id' => $tentanglaporins->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <div class="">
                                                        <div class="text-black mb-2">Are you sure want to delete this item?
                                                        </div>
                                                        <strong>{{ $tentanglaporins->title }}</strong>
                                                    </div>
                                                    <hr>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    {{-- Detail Modal --}}
                                    <div class="modal fade" id="{{ 'detailTentangLaporin' . $tentanglaporins->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="detailTentangLaporinLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <form class="modal-content"
                                                enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h4 class="modal-title fs-5" id="detailTentangLaporinLabel">Detail
                                                        Tentang Laporin</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-start pb-2">
                                                        <h3>{{ $tentanglaporins->title }}</h3>
                                                    </div>
                                                    <div class="text-start pb-2">
                                                        <div class="col-span-2"><img src="{{ url(Storage::url($tentanglaporins->image)) }}" alt="" title="" class="h-10" /></div>
                                                    </div>
                                                    <div class="text-start">
                                                        <p>{{ $tentanglaporins->description }}</p>
                                                    </div>
                                                    <div class="text-start">
                                                        <p><i class="fa-solid fa-calendar"></i> {{ $tentanglaporins->created_at }}</p>
                                                        {{-- <p class="fs-3">Terakhir Update {{ $tentanglaporins->updated_at }}</p> --}}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="" id="pagination">{{ $tentanglaporin->onEachSide(3)->links() }}</div>
            </div>
        </div>
    </div>
@endsection

