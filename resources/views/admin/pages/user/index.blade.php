@extends('admin.layouts.default')
@section('page-title', 'Users')
@section('content')
    <div class="p-2">
        <div class="card shadow-lg p-3 bg-body-tertiary p-4">
            @if (Session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="mb-3">
                <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUser"><i
                        class="fa-solid fa-plus"></i> User</a>
            </div>

            <form id="search" action="{{ route('admin.user') }}" method="GET" class="input-group input-group-sm mb-3 w-25">
                <input id="keyword" name="keyword" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Search User">
                <button class="input-group-text" id="inputGroup-sizing-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <div class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="addUserLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form class="modal-content" method="POST" action="{{ route('pages.add.user') }}">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addUserLabel">Create New User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="pb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="">
                            </div>
                            <div class="pb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="pb-3">
                                <label for="tlp" class="form-label">Telepon</label>
                                <input type="text" name="tlp" class="form-control" id="tlp" placeholder="">
                            </div>
                            <div class="pb-3">
                                <label for="role_id" class="form-label">Role</label>
                                <select class="form-select" name="role_id" aria-label="Small select example">
                                    <option value="{{ '0' }}">pelapor</option>
                                    @foreach ($role as $roles)
                                        <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="pb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="">
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
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $users)
                            <tr>
                                <th class="p-2" scope="row">{{ $loop->iteration }}</th>
                                <td class="p-2">{{ $users->name }}</td>
                                <td class="p-2">{{ $users->email }}</td>
                                <td class="p-2">{{ $users->tlp }}</td>
                                <td class="p-2">{{ $users->role->name }}</td>
                                <td class="p-2">
                                    <a href="" class="btn bg-warning btn-sm text-white mr-2" data-bs-toggle="modal"
                                        data-bs-target="">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>

                                    <a href="" class="btn bg-info btn-sm text-white mr-2">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="" class="btn bg-danger btn-sm text-white" data-bs-toggle="modal"
                                        data-bs-target="">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="" id="pagination">{{ $user->onEachSide(3)->links() }}</div>
            </div>
        </div>
    </div>
@endsection
