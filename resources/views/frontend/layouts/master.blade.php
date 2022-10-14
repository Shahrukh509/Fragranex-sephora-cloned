 <!-- Developed by shahrukh siddiqui -->
<!DOCTYPE html>
<html class="no-js" lang="en" style="overflow-y: scroll;">

<head>
    <meta name="google" content="notranslate">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>@yield('title')</title>
    <meta name="title" content="@yield('meta_title')">
     <meta name="description" content="@yield('meta_description')">
     <meta name="keywords" content="@yield('meta_keyword')">
     <link rel="canonical" href="{{url()->current()}}"/>
     <meta name="csrf-token" content="{{ csrf_token() }}" />
   {{--  <meta name="description" content="Save up to 80% on men&#39;s and women&#39;s fragrance products from top brands with FragranceX.com! We sell only 100% genuine perfume for women and cologne for men, so you can shop with confidence. Buy your favorite perfumes and get free shipping!"
    /> --}}
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5, minimum-scale=1" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/frontend/css/products.css') }}"/>

    <link rel="stylesheet" href="{{ asset('public/frontend/css/nc_exts.css') }}">

    <link rel="stylesheet" href="{{ asset('public/frontend/css/nc_ext_v.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/plugins.css') }}">
    

    <link rel="preload" href="{{ asset('public/frontend/css/c_style.css') }}" as="style">



   
    <!-- bootstrap 4 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous">
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js">
        
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="top">

    @include('frontend.layouts.header')


    @yield('content')
    
  
    @include('frontend.layouts.footer')




<script>

    $(document).ready(function() {

        $(".owl-carousel").owlCarousel({

            autoPlay: 3000,
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            center: true,
            nav: true,
            loop: true,
            responsive: {
                600: {
                    items: 3
                }
            }
        });



        $(".owl-carousel_1").owlCarousel({

            autoPlay: 3000,
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            center: true,
            nav: true,
            loop: true,
            responsive: {
                600: {
                    items: 3
                }
            }
        });

    });


    // new cara 
    $(document).ready(function() {


        if ($('.bbb_viewed_slider').length) {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 6000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    575: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    991: {
                        items: 4
                    },
                    1199: {
                        items: 6
                    }
                }
            });

            if ($('.bbb_viewed_prev').length) {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function() {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next').length) {
                var next = $('.bbb_viewed_next');
                next.on('click', function() {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
    </script> 
   
    
    <script src="{{ asset('public/frontend/js/email-decode.min.js') }}"></script>
    
    
    <script src="{{ asset('public/frontend/js/manifest.js') }}"></script>
   
   
    
  
    
                     

        

@stack('child-scripts')
</body>
</html>

