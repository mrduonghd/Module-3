@extends('admin.master')
@section('content-admin')
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('categories.create') }}">ADD</a>
    <div class="card mt-2">
        <h5 class="card-header">Danh sách the loai</h5>
        <div class="card-body text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td><a class="btn btn-warning" href="{{ route('categories.edit', $category->id) }}">EDIT</a></td>
                        <td><a class="btn btn-danger" href="{{ route('categories.destroy', $category->id) }}">DELETE</a></td>

                    </tr>
                    @empty
                        <tr>
                            <td colspan="2">No Data</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
