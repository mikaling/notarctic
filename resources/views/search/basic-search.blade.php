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
                        <img src="{{ asset("storage/images/$product->path") }}" class"img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">

                    <div class="s_product_text">
                        <h3>{{$product->name}}</h3>
                        <h2>Ksh {{$product->price}}</h2>
                        <ul class="list">
                            <li><a class="active" href="/categories/{{$product->category->id }}"><span>Category</span> : {{$product->category->name}}</a></li>
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
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
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
