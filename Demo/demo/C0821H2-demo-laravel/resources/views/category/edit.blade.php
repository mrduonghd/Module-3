@extends('admin.master')
@section('content-admin')
<div class="card mt-2">
    <h5 class="card-header">Edit category</h5>
    <div class="card-body">
        <form method="post" action="{{ route('categories.update', $category->id) }}">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control  @error('name') is-invalid @enderror" >
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection