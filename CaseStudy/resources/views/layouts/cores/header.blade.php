<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="main-nav">
        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">D.Store</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1>
                    <a class="navbar-brand" href="{{ route('home') }}">D.Store</a>
                </h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                <ul class="nav navbar-nav navbar-left cl-effect-15">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">shop
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('books.showAll') }}">Book Catalog</a>
                            </li>
                            <li>
                                <a href="{{ route('carts.show-cart') }}">checkout</a>
                            </li>
                            <li>
                                <a href="payment.html">Payment</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Contact us</a>
                    </li>
                    @if (!Auth::user())
                        <li>
                            <a href="{{ route('showFormLogin') }}" title="SignIn & SignUp">
                                <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                            </a>
                        </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">
                            <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                            Hello:{{ Auth::user()->name }}
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Change Password</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
                <!-- search-bar -->
                <div class="search-bar-agileits">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li>
                                <a class="cd-search-trigger" href="#cd-search">
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                        <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Type and Hit Enter...">
                        </form>
                    </div>
                </div>
                <!-- //search-bar ends here -->
                <!-- shopping cart -->
                {{-- <div class="cart-mainf">
                    <div class="chrcart chrcart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_chr_cart" type="submit" name="submit" value="">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div> --}}
                <!-- //shopping cart ends here -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="clearfix"></div>
        </div>
        <!-- /.container -->
    </div>
</nav>
<!-- //navbar ends here -->
<!-- banner -->
{{-- <div class="banner-bg-agileits">
    <!-- banner-text -->
    <div class="banner-text">
        <div class="container">
            <p class="b-txt">the</p>
            <h2 class="title">
                Library
            </h2>
            <ul class="banner-txt">
                <li>share.</li>
                <li> explore. </li>
                <li>amplify.</li>
            </ul>
        </div>
    </div>
    <!-- //banner-text -->
</div> --}}
<!-- //banner -->
