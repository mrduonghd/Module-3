@extends('admin.master')
@section('admin-content')
    <div class="card mt-2">
        <h5 class="card-header">Edit Books</h5>
        <div class="card-body">
            <form method="post" action="{{ route('books.update', $book->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="{{ $book->title }}"
                        class="form-control  @error('name') is-invalid @enderror">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                Author:
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <select name="author_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($authors as $author)
                            <option @if ($book->authorID == $author->id)
                                selected
                        @endif
                        value="{{ $author->id }}">{{ $author->firstName }}</option>
                        @endforeach
                    </select>
                </div>
                Category:
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($categories as $category)
                            <option @if ($book->categoryID == $category->id)
                                selected
                        @endif
                        value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                Publication Year:
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label"></label>
                    <input type="date" name="pYear" value="{{ $book->publicationYear }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('pYear')
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
                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $book->price }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                Description:
                <div class="input-group input-group-outline mb-3">
                    <textarea class="form-control @error('name') is-invalid @enderror" style="width: 100%" name="desc"
                        rows="20">{{ $book->description }}</textarea>
                    @error('desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
