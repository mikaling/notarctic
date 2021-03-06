@include('layouts.header')

@include('customer.partials._navbar')

<section class="blog-banner-area" id="blog">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Search Results</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Search Results</li>
                    </ol>
                </nav>
                <h5>{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</h5>
            </div>
        </div>
    </div>
</section>

@include('customer.partials.alerts')

<section class="section-margin calc-60px">
<div class="search-container container">
    @foreach($products as $product)
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div>
                        <a href="description/{{ $product->id }}"><img src="{{ asset("storage/images/$product->path") }}" height="400" width="400" class"img-fluid" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">

                    <div class="s_product_text">
                        <h3><a href="description/{{ $product->id }}">{{$product->name}}</a> </h3>
                        <h2>Ksh {{$product->price}}</h2>
                        <ul class="list">
                            <li><a class="active" href="/categories/{{$product->category->id }}"><span>Category</span> : {{$product->category->name}}</a></li>
                            <li><a href="#"><span>Brand</span> : {{$product->brand}} </a></li>
                            <li><a href="#"><span>Availibility</span> {{$product->quantity>1 ? ": In Stock" :": Out of Stock!"}}</a></li>
                        </ul>
                        <p>{{$product->description}}</p>
                            <button class="snipcart-add-item button button-header"
                            data-item-id="{{$product->id}}"
                            data-item-price="{{$product->price}}"
                            data-item-url="/description/{{$product->id}}"
                            data-item-description="{{$product->description}}"
                            data-item-image="{{asset('storage/images/$products->path')}}"
                            data-item-name="{{$product->name}}">
                            Add to cart
                            </button>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="d-flex justify-content-center">
    {{ $products->appends(request()->input())->links() }}
    </div>
</div>
</section>

@include('layouts.footer')
