@extends('layouts.header')
@include('layouts.header')
@section('title')
    <title>Arctic Computers -Home</title>
@stop
<!--================ Start Header Menu Area =================-->
@include('customer.partials._navbar')
<!--================ End Header Menu Area =================-->

<main class="site-main">

    <!--================ Hero banner start =================-->
    <section class="hero-banner">
        <div class="container">
            <div class="row no-gutters align-items-center pt-60px">
                <div class="col-5 d-none d-sm-block">
                    <div class="hero-banner__img">
                        <img class="img-fluid" src="{{asset('img/home/banner.png')}}" style="width: 500px;height: 600px" alt="">
                    </div>
                </div>
                <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                    <div class="hero-banner__content">

                        <h2>Arctic Computer Shop</h2>
                        <p>The place to come when you need the best bargains on computers, digital cameras, fax machines, laptops, projectors, and related accessories.</p>
                        <a class="button button-hero" href="/products">Browse Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Hero banner finish =================-->

    <!--================ Hero Carousel start =================-->
    @include('customer.partials.top_items')
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->
    @include('customer.partials.trending_products')
    <!-- ================ trending product section end ================= -->


    <!-- ================ offer section start ================= -->
   @include('customer.partials.offers')
    <!-- ================ offer section end ================= -->

    <!-- ================ Best Selling item  carousel ================= -->
    @include('customer.partials.best_selling')
    <!-- ================ Best Selling item  carousel end ================= -->

    <!-- ================ Blog section start ================= -->
    <!-- ================ Blog section end ================= -->

    <!-- ================ Subscribe section start ================= -->
    <!-- ================ Subscribe section end ================= -->


</main>


<!--================ Start footer Area  =================-->
@include('layouts.footer')
<!--================ End footer Area  =================-->



<script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendors/skrollr.min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('vendors/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('vendors/mail-script.js')}}"></script>
<script src="js/main.js"></script>
</body>
</html>
