<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>D.Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Chronicle Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
 SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="{{ asset('css/shop.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- checkout css -->
    <link href="{{ asset('css/checkout.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- Range-slider-css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui1.css') }}">
    <!-- common-css -->
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        @include('layouts.cores.header')
        <div class="banner-bg-inner">
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">
                        world of reading
                    </h2>

                </div>
            </div>
        </div>

        @yield('content')
        @include('layouts.cores.footer')
    </div>
    <!-- js -->
    <!-- Common js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!--// Common js -->
    <!-- cart-js -->
    <script src="{{ asset('js/minicart.js') }}"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- price range (top products) -->
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script>
        //<![CDATA[ 
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider(
                "values", 1));

        }); //]]>
    </script>
    <!-- //price range (top products) -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!--search jQuery-->
    <script src="{{ asset('js/main.js') }}"></script>
    <!--search jQuery-->

    <!-- Scrolling Nav JavaScript -->
    <script src="{{ asset('js/scrolling-nav.js') }}"></script>
    <!-- //fixed-scroll-nav-js -->
    <!--//scripts-->

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- start-smoth-scrolling -->
    <script src="{{ asset('js/move-top.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script>
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- smoothscroll -->
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <!-- //smoothscroll -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script>
        function addToCart(event){
            event.preventDefault();
            let urlCart = $(this).data('url');
            // alert(211341);
            $.ajax({
                type: 'GET',
                url: urlCart,
                dataType: 'json',
                success: function(data){
                    if(data.code === 200){
                        alert('Them san pham thanh cong')
                    }
                        // console.log(data);
                },
                error: function(){

                }
            });
        }
        $(function(){
            $('.add_to_cart').click(addToCart);
        })
    </script>
    <script>
        function cartUpdate(event){
            event.preventDefault();
            let urlUpdateCart = $('.update_cart_url').data('url');
            let id = $(this).data('id');
            let quantity = $(this).parents('tr').find('input.quantity').val();
            // alert(urlUpdateCart);
            $.ajax({
                type: 'GET',
                url: urlUpdateCart,
                data: {id: id, quantity: quantity},
                success: function(data){
                    if(data.code === 200){
                        $('.cart_wrapper').html(data.cart_component);
                        alert('cap nhap thanh cong')
                    }
                },
                error: function(){

                }
            });
        }

        function cartDelete(event){
            event.preventDefault();
            let urlDelete = $('.delete_cart_url').data('url')
            let id = $(this).data('id');
            // alert(urlDelete);
            $.ajax({
                type: 'GET',
                url: urlDelete,
                data: {id: id},
                success: function(data){
                    if(data.code === 200){
                        $('.cart_wrapper').html(data.cart_component);
                        alert('xoa thanh cong')
                    }
                },
                error: function(){

                }
            });
        }

        $(function(){
            $(document).on('click','.cart_update', cartUpdate)
            $(document).on('click','.cart_delete', cartDelete)
        });
    </script>

</body>

</html>
