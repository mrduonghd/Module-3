<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="input-group">
            <form action="{{ route('shops.search') }}" method="POST">
                @csrf
                <input type="search" class="form-control rounded" placeholder="Search" name="search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">search</button>
            </form>
        </div>
        <div class="col-12 mt-2">
            <a class="btn btn-success" href="{{ route('shops.create') }}">Thêm mới</a>
        </div>
        <div class="card mt-2 text-center">
            <h5 class="card-header">Danh sách sản phẩm</h5>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Mã đại lý</th>
                        <th>Tên đại lý</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Tên người quản lý</th>
                        <th>Trạng thái</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @forelse($shops as $key => $shop)
                        <tr>
                            <td>{{ $shop->code }}</td>
                            <td>{{ $shop->name }}</td>
                            <td>{{ $shop->phone }}</td>
                            <td> {{ $shop->email }}</td>
                            <td>{{ $shop->address }} </td>
                            <td>{{ $shop->manager_name }} </td>
                            <td class="status{{ $shop->status }}"> </td>
                            <td><a href="{{ route('shops.edit', $shop->id) }}" class="btn btn-warning">Sửa</a></td>
                            <td><a href="{{ route('shops.destroy', $shop->id) }}"
                                    onclick="return confirm('Ban co chac muon xoa ?')" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No data</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('.status0').text('Đang hoạt động')
            $('.status1').text('Ngừng hoạt động')
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
