@extends('admin.master')
@section('content-admin')
<div class="card mt-2">
    <h5 class="card-header">Add new User</h5>
    <div class="card-body">
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control  @error('name') is-invalid @enderror" >
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="">Role</label>
                <input type="text" name="role" value="{{ old('role') }}" class="form-control  @error('role') is-invalid @enderror" >
                @error('role')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="">Email</label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror" >
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="">Password</label>
                <input type="password" name="pwd" value="{{ old('pwd') }}" class="form-control  @error('pwd') is-invalid @enderror" >
                @error('pwd')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection