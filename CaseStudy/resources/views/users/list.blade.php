@can('crud')
    
@extends('admin.master')
@section('admin-content')
<div class="col-12 mt-2">
    {{-- <a class="btn btn-success" href="">Thêm mới</a> --}}
</div>
<div class="card mt-2 text-center">
    <h5 class="card-header">Danh sách nguoi dung</h5>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Role</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
            @forelse($users as $key => $user)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>                        
                <td>{{ $user->phone }} </td>
                <td><a href="{{ route('users.destroy',$user->id) }}" onclick="return confirm('Ban co chac muon xoa ?')" class="btn btn-danger">Xoa</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7">No data</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection
@endcan