<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #2d3032;
            font-family: 'Raleway', sans-serif;
            font-weight: 1000;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #393e40;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .form-create-post {
            margin-top: 2em;
        }

        input, textarea {
            width: 30em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="links">
            <a href="{!! route('home') !!} "> Trang chủ</a>
            <a href="{{route('posts.index')}}">Danh sách bài viết</a>
        </div>
        <form action="{{ route('posts.store') }}" method="post" class="form-create-post">
            {{csrf_field()}}
            <label for="title">Tiêu đề</label> <br/>
            <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"/> 
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror<br/>
            <label for="content">Nội dung</label> <br/>
            <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror"></textarea>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror<br/>
            <label for="date">Ngày cập nhập</label> <br/>
            <input id="date" name="date" type="date" class="form-control @error('date') is-invalid @enderror"/>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror<br/>
            <button type="submit" value="Create">Lưu</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>