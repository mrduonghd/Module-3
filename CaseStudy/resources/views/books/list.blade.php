@extends('admin.master')
@section('admin-content')
<div class="col-12 mt-2">
    <a class="btn btn-success" href="{{ route('books.create') }}">Thêm mới</a>
</div>
<div class="card mt-2 text-center">
    <h5 class="card-header">Danh sách Book</h5>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th>STT</th>
                <th>Tên sach</th>
                <th>Tac Gia</th>
                <th>Nam xuat ban</th>
                <th>Hinh anh</th>
                <th>The loai</th>
                <th>Giá tiền(VND)</th>
                {{-- <th>Mo ta</th> --}}
                <th colspan="2">Action</th>
            </tr>
            @forelse($books as $key => $book)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $book->title }}</td>
                    <td>
                        {{ $book->authors->firstName ?? 'chua co tac gia'}}
                    </td>
                    <td>{{ $book->publicationYear }}</td>
                    <td><img src="{{ asset('storage/' . $book->image) }}" alt="" width="100"></td>
                    <td>
                        {{ $book->categories->name ?? 'Chua phan loai'}}
                    </td>
                    <td>{{ number_format($book->price) }} </td>
                    {{-- <td>{{ $book->description }} </td> --}}
                    <td><a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Cập nhật</a>
                    </td>
                    <td><a href="{{ route('books.destroy', $book->id) }}" class="btn btn-danger">Xoa</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">No data</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection