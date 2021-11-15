@extends('admin.master')
@section('content-admin')
<div class="card mt-2">
    <h5 class="card-header">Edit User</h5>
    <div class="card-body">
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control  @error('name') is-invalid @enderror" >
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="">Role</label>
                <input type="text" name="role" value="{{ $user->role }}" class="form-control  @error('role') is-invalid @enderror" >
                @error('role')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection