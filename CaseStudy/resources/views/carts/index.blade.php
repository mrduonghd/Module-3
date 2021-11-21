@extends('master')
@section('content')
    <div class="crumbs text-center">
        <div class="container">
            <div class="row">
                <ul class="btn-group btn-breadcrumb bc-list">
                    <li class="btn btn1">
                        <a href="index.html">
                            <i class="glyphicon glyphicon-home"></i>
                        </a>
                    </li>
                    <li class="btn btn2">
                        <a href="{{ route('books.showAll') }}">Book Catalogue</a>
                    </li>
                    <li class="btn btn4">
                        <a href="#">Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--checkout-->
    <div class="innerf-pages section">
        <div class="container">
            <div class="privacy about">
                <h4 class="rad-txt">
                    <span class="abtxt1">review</span>
                    <span class="abtext">your order</span>
                </h4>

                <div class="cart_wrapper">
                    @include('carts.conponents.cart_component')

                </div>

            </div>

        </div>
    </div>
    <!--//checkout-->
@endsection
