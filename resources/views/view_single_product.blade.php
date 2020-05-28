@include('layouts.header')
<!--================ Start Header Menu Area =================-->
@include('customer.partials._navbar')
<!--================ End Header Menu Area =================-->

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="blog">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Shop Single</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->


<!--================Single Product Area =================-->
@include('customer.partials.single_products_area')

<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
@include('customer.partials.product_description')

<!--================End Product Description Area =================-->

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
