@extends('layout.master')
@section('content')
@if (Session::has('not-login'))
    <div class="not-login">
        <p class="text-danger">{{ Session::get('not-login') }}</p>
    </div>
@endif
    <div class="title m-b-md">
        Raising the bar
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection
