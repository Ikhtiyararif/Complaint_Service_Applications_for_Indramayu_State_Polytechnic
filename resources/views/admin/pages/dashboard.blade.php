@extends('admin.layouts.default')
@section('page-title', 'Dashboard Admin')

@section('content')
<div class="p-2">
    <div class="card p-4">
        <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>

@endsection