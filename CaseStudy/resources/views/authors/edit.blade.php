@extends('admin.master')
@section('admin-content')
    <div class="card mt-2">
        <h5 class="card-header">Edit Author</h5>
        <div class="card-body">
            <form method="post" action="{{ route('authors.update', $author->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstName" value="{{ $author->firstName }}"
                        class="form-control  @error('name') is-invalid @enderror">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastName" value="{{ $author->firstName }}"
                        class="form-control  @error('name') is-invalid @enderror">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                Image:
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <input type="file" name="image" class="form-control @error('name') is-invalid @enderror">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                Description:
                <div class="input-group input-group-outline mb-3">
                    <textarea class="form-control @error('name') is-invalid @enderror" name="desc" rows="20" style="width: 100%">{{ $author->description }}</textarea>
                    @error('desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
