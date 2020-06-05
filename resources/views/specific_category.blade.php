@extends('layouts.header')
@include('layouts.header')
@section('title')
    <title>{{$category->name}}</title>
@stop
<!--================ Start Header Menu Area =================-->
@include('customer.partials._navbar')
<!--================ End Header Menu Area =================-->

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Browse {{$category->name}}</h1>

            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<div class="container" style="margin-top: 50px">

    <div class="row" >
    @foreach($category->products as $products)

            <div class="col-md-6 col-lg-4">
            <div class="card" style="width: 18rem; height: 350px; margin-bottom: 30px" >
                <img src="{{asset("storage/images/$products->path")}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $products->name }}</h5>
{{--                    <p>{{ $products->description }}</p>--}}
                    <p>Price: Ksh{{ $products->price }}</p>
                    <a href="/description/{{ $products->id }}" class="btn btn-primary" style="background-color: #FF35C3">View product</a>
                </div>
            </div>
        </div>


    @endforeach
    </div>


</div>


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
