<section class="section-margin mt-0">
    <div class="owl-carousel owl-theme hero-carousel">
        @foreach($top_products as $product)
        <div class="hero-carousel__slide">

            <img src="{{asset("storage/images/$product->path")}}" alt="" class="img-fluid">
            <a href="#" class="hero-carousel__slideOverlay">
                <h3>{{$product->name}}</h3>
                <p>{{$product->brand}}</p>
            </a>
        </div>
        @endforeach
{{--        <div class="hero-carousel__slide">--}}
{{--            <img src="img/home/hero-slide2.png" alt="" class="img-fluid">--}}
{{--            <a href="#" class="hero-carousel__slideOverlay">--}}
{{--                <h3>Wireless Headphone</h3>--}}
{{--                <p>Accessories Item</p>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="hero-carousel__slide">--}}
{{--            <img src="img/home/hero-slide3.png" alt="" class="img-fluid">--}}
{{--            <a href="#" class="hero-carousel__slideOverlay">--}}
{{--                <h3>Wireless Headphone</h3>--}}
{{--                <p>Accessories Item</p>--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>
</section>
