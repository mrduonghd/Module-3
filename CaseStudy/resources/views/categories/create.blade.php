@extends('admin.master')
@section('admin-content')
    <div class="card mt-2">
        <h5 class="card-header">Add new Categroy</h5>
        <div class="card-body">
            <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('title') }}"
                        class="form-control  @error('name') is-invalid @enderror">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div> --}}
                
                Description:
                <div class="input-group input-group-outline mb-3">
                    <textarea class="form-control @error('name') is-invalid @enderror" name="desc" rows="20" style="width: 100%"></textarea>
                    @error('desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
