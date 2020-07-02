@extends('layouts.header')
@include('layouts.header')
@section('title')
    <title>Category</title>
    @stop
<!--================ Start Header Menu Area =================-->
@include('customer.partials._navbar')
<!--================ End Header Menu Area =================-->

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Browse our products</h1>

            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<!-- ================ category section start ================= -->
@include('customer.partials.category_section')
<!-- ================ category section end ================= -->

<!-- ================ similar product area start ================= -->
{{--@include('customer.partials.category_similar_products')--}}
<!-- ================ similar product area end ================= -->

<!-- ================ Subscribe section start ================= -->
@include('customer.partials.subscribe')
<!-- ================ Subscribe section end ================= -->


<!--================ Start footer Area  =================-->
@include('layouts.footer')
<!--================ End footer Area  =================-->



<script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendors/skrollr.min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('vendors/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('vendors/mail-script.js')}}"></script>
<script src="js/main.js"></script>
</body>
</html>

