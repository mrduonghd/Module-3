@extends('admin.master')
@section('content-admin')
    <a class="btn btn-primary mt-3 mb-3" href="{{ route('accounts.create') }}">ADD</a>
    <div class="card mt-2">
        <h5 class="card-header">Danh sách nguoi dung</h5>
        <div class="card-body text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($accounts as $key => $account)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->email }}</td>
                        <td>{{ $account->password }}</td>
                        <td><a class="btn btn-warning" href="{{ route('accounts.edit', $account->id) }}">EDIT</a></td>
                        <td><a class="btn btn-danger" href="{{ route('accounts.destroy', $account->id) }}">DELETE</a></td>

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
