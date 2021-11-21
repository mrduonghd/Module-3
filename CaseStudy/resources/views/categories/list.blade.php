@extends('admin.master')
@section('admin-content')
<div class="col-12 mt-2">
    <a class="btn btn-success" href="{{ route('categories.create') }}">Thêm mới</a>
</div>
<div class="card mt-2 text-center">
    <h5 class="card-header">Danh sách the loai</h5>
    <div class="card-body">
        <table class="table table-hover">
            <tr>
                <th>STT</th>
                <th>Tên The loai</th>
                {{-- <th>Mo ta</th> --}}
                <th colspan="2">Action</th>
            </tr>
            @forelse($categories as $key => $category)
            @if ($category->id == 0)
                @continue             
            @endif
                <tr>
                    <td>{{ $key ++ }}</td>
                    <td>{{ $category->name }}</td>
                    {{-- <td>
                        {{ $product->category->name ?? 'Chưa phân loại' }}
                    </td> --}}
                    {{-- <td>{{ $category->description }} </td> --}}
                    <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Cập nhật</a>
                    </td>
                    <td><a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger">Xoa</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No data</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>
@endsection