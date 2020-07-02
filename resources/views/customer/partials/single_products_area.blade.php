@foreach($product as $product)
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="owl-carousel owl-theme s_Product_carousel">
                    <div class="single-prd-item">
                        <img src="{{asset("storage/images/$product->path")}}"  class="img-fluid" alt="">

                    </div>

                </div>
            </div>

            <div class="col-lg-5 offset-lg-1">

                <div class="s_product_text">

                    <h3>{{$product->name}}</h3>
                    <h2>Ksh {{$product->price}}</h2>
                    <ul class="list">
                        <li><a class="active" href="/categories/{{$product->category->id }}"><span>Category</span> : {{$product->category->name}}</a></li>
                        <li><a href="#"><span>Availibility</span> {{$product->quantity>=1 ? ": In Stock" :": Out of Stock!"}}</a></li>
                    </ul>
                    <p>{{$product->description}}</p>
                    @if($product->quantity > 0)

                        <form action={{ route('cart.store', $product) }} method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="button button-header">Add to cart</button>
                        </form>
                    @else
                            <div>Item not available</div>
                    @endif
                    @guest

                        @else
                        <div class="card_area d-flex align-items-center">
                            <form method="post" action="/wishlist" enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <input type="hidden" name="product_id" value="{{$product->id}}"/>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                                <button onclick="toggleClass()" type="submit" style="border-radius:50%;color: red" class="icon_btn wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>


                            </form>
                        </div>
                        @endguest

                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
