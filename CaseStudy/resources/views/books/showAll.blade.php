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
                </ul>
            </div>
        </div>
    </div>
    <!--//breadcrumbs ends here-->
    <!-- Shop -->
    <div class="innerf-pages section">
        <div class="container-cart">
            <!-- product left -->
            <div class="side-bar col-md-3">
                <!--preference -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">
                        Categories</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Biographies</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Fiction</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Management</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Business</span>
                        </li>

                    </ul>
                </div>
                <!-- // preference -->
                <div class="search-hotel">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>author</span> in focus
                    </h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="search here" name="search" required="">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <!-- price range -->
                <div class="range">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>Price</span> range
                    </h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>
                <!-- //price range -->
                <!--preference -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>latest</span> arrivals
                    </h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">last 30 days</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">last 90 days</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">last 150 days</span>
                        </li>

                    </ul>
                </div>
                <!-- // preference -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Language</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">English</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Spanish</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Japanese</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">German</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Korean</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Chinese</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">French</span>
                        </li>
                    </ul>
                </div>
                <!-- //discounts -->
                <!-- Binding -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Format</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Hardcover</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Board Book</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Bundle</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Paperback</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Audio Book</span>
                        </li>
                    </ul>
                </div>
                <!-- //Binding -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="shopf-sear-headits-sear-head">Discount</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">5% - 20%</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">20% - 40%</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">40% - 60%</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">60% or more</span>
                        </li>
                    </ul>
                </div>
                <!-- //discounts -->
                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="shopf-sear-headits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->


            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="left-ads-display col-md-9">
                <div class="wrapper_top_shop">
                    @foreach ($books as $book)
                        <div class="product-sec1">
                            <div class="col-md-3 product-men">
                                <div class="product-chr-info chr">
                                    <div class="thumbnail">
                                        <a href="{{ route('books.detail', $book->id) }}">
                                            <img src="{{ asset('storage/' . $book->image) }}" alt="" style="height: 300px">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <h4 style="height: 70px">{{ $book->title }}</h4>
                                        <p>
                                            {{ $book->authors->firstName ?? '' }}
                                        </p>
                                        <div class="matrlf-mid">
                                            <ul class="rating">
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
                                                        <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="fa fa-star gray-star" aria-hidden="true"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="price-list">
                                                <li>{{ number_format($book->price) }} VND</li>
                                                <li>
                                                    $200.00
                                                </li>
                                            </ul>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="chr_item" value="Book1">
                                            <input type="hidden" name="amount" value="100.00">
                                            <button type="submit" class="chr-cart pchr-cart add_to_cart" data-url="{{ route('carts.add-to-cart',['id'=>$book->id]) }}">Add to cart
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!--// Shop -->
@endsection