@extends('master')
@section('content')
    <!-- breadcrumbs -->
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
                    <li class="btn btn3">
                        <a href="">Book Detail</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--//breadcrumbs ends here-->
    <!-- Single -->
    <div class="innerf-pages section">
        <div class="container">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            {{-- <li data-thumb="images/s1.jpg">
                                <div class="thumb-image">
                                    <img src="images/lib8.jpg" data-imagezoom="true" alt=" " class="img-responsive">
                                </div>
                            </li>
                            <li data-thumb="images/s2.jpg">
                                <div class="thumb-image">
                                    <img src="images/s2.jpg" data-imagezoom="true" alt=" " class="img-responsive">
                                </div>
                            </li> --}}
                            <li data-thumb="images/s3.png">
                                <div class="thumb-image">
                                    <img src="{{ asset('storage/' . $book->image) }}" data-imagezoom="true" alt=" " class="img-responsive">
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3>{{ $book->title }} 
                    <span> Hardcover – {{ $book->publicationYear }}</span>
                </h3>
                <p>by
                    <a href="#">{{ $book->authors->firstName ?? 'Chua co tac gia' }}</a>
                </p>
                <div class="caption">

                    <ul class="rating-single">
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                    <h6>
                        {{ number_format($book->price) }} VND</h6>
                </div>
                <div class="desc_single">
                    <h5>Description</h5>
                    <p>{!! $book->description !!}</p>
                </div>
                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="chr_item" value="Single book">
                            <input type="hidden" name="amount" value="100.00">
                            <button type="submit" class="chr-cart pchr-cart add_to_cart" data-url="{{ route('carts.add-to-cart',['id'=>$book->id]) }}">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- /new_arrivals -->
    <!--// Single -->
@endsection
