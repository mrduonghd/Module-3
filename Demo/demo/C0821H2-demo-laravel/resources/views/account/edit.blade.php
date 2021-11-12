@extends('admin.master')
@section('content-admin')
<div class="card mt-2">
    <h5 class="card-header">Edit account</h5>
    <div class="card-body">
        <form method="post" action="{{ route('accounts.update', $account->id) }}">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $account->name }}" class="form-control  @error('name') is-invalid @enderror" >
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="">Email</label>
                <input type="text" name="email" value="{{ $account->email }}" class="form-control  @error('email') is-invalid @enderror" >
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <label for="">Password</label>
                <input type="password" name="pwd" value="{{ $account->password }}" class="form-control  @error('pwd') is-invalid @enderror" >
                @error('pwd')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection