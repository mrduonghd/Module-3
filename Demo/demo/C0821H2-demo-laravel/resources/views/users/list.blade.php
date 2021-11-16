@extends('admin.master')
@section('content-admin')
    <div class="mt-3">
        <label>
            Show Name
            <input type="checkbox" id="show-name" class="" checked>
        </label>
        <label>
            Chon mau
            <input type="color" id="color-name">
        </label>
    </div>

    <a class="btn btn-primary" href="{{ route('users.create') }}">ADD</a>

    <div class="container">
        <div class="card mt-2">
            <h5 class="card-header">Danh sách nguoi dung</h5>
            <div class="card-body text-center">
                <table class="table">
                    <tr>
                        <td>STT</td>
                        <td class="column-name">Name</td>
                        <td>Role</td>
                        <td>Email</td>
                        <td colspan="2">Action</td>
                    </tr>
                    @foreach ($users as $key => $user)
                        @if (Auth::user()->id == $user->id)
                            @continue
                        @endif
                        <tr class="user-item" id="user-item-{{ $user->id }}">
                            <td>{{ ++$key }}</td>
                            <td class="column-name">{{ $user['name'] }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td><a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                            <td>
                                {{-- <button type="button" data-id="{{ $user->id }}"
                                    class="btn btn-danger delete-user-item">Delete</button> --}}
                                    <a class="btn btn-danger" href="{{ route('users.delete', $user->id) }}">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
