
<!-- ================= Slider Section Offers ====================-->
<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">

            <h2>Browse our Products </h2>
        </div>
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">

            @foreach($trending as $product)
            <div class="card text-center card-product">
                <div class="card-product__img">
                    <img class="img-fluid" src="{{asset("storage/images/$product->image_path")}}" alt="">
                    <ul class="card-product__imgOverlay">
                        <li><button><i class="ti-search"></i></button></li>
                        <li><button><i class="ti-shopping-cart"></i></button></li>
                        <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                </div>
                <div class="card-body">
                    <p>Accessories</p>
                    <h4 class="card-product__title"><a href="single-product.html">{{$product->name}}</a></h4>
                    <p class="card-product__price">KSH {{$product->price}}</p>

                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!--========================= End Slider Flash Sales Area ==================-->



<!-- ============================ Other Offers Start============================-->
<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">
            <!-- <p>Other Offers For You</p> -->
            <h2>Other Offers for You </h2>
        </div>
        <div class="row">
            @foreach($other_trending as $product)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card text-center card-product">
                    <div class="card-product__img">
                        <img class="card-img" src="{{asset("storage/images/$product->path")}}" alt="">
                        <ul class="card-product__imgOverlay">
                            <li><button><i class="ti-search"></i></button></li>
                            <li><button><i class="ti-shopping-cart"></i></button></li>
                            <li><button><i class="ti-heart"></i></button></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p>{{$product->brand}}</p>
                        <h4 class="card-product__title"><a href="/description/{{$product->id}}">{{$product->name}}</a></h4>
                        <p class="card-product__price">{{$product->price}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ===========================Other Offers End=======================-->
