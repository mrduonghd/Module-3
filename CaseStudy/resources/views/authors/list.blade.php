@can('crud')
    
@extends('admin.master')
@section('admin-content')
<div class="col-12 mt-2">
    <a class="btn btn-success" href="{{ route('authors.create') }}">Thêm mới</a>
</div>
<div class="card mt-2 text-center">
    <h5 class="card-header">Danh sách tac gia</h5>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th>STT</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Hinh anh</th>
                <th colspan="2">Action</th>
            </tr>
            @forelse($authors as $key => $author)
            @if ($author->id == 0)
            @continue             
            @endif
            <tr>
                <td>{{ $key ++ }}</td>
                <td>{{ $author->firstName }}</td>
                <td>{{ $author->lastName }}</td>
                <td><img src="{{ asset('storage/' . $author->image) }}" alt="" width="100"></td> 
                {{-- <td>
                    {{ $product->category->name ?? 'Chưa phân loại' }}
                </td> --}}
                {{-- <td>{!! $author->description !!} </td> --}}
                <td><a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Cập nhật</a>
                </td>
                <td><a href="{{ route('authors.destroy', $author->id) }}" onclick="return confirm('Ban co chac muon xoa ?')" class="btn btn-danger">Xoa</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No data</td>
            </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection
@endcan