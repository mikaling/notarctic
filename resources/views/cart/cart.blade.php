@include('layouts.header')

@include('customer.partials._navbar')

<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Shopping Cart</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </nav>
                @if(Cart::count() > 0)
                    <h5>{{ Cart::count() }} item(s) in cart</h5>
                @else
                    <h5>No items in cart</h5>
                @endif
            </div>
        </div>
</div>
</section>

@include('customer.partials.alerts')

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            @if(Cart::count() > 0)
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <a href="/description/{{ $item->model->id }}">
                                                <img src="{{ asset('storage/images/'.$item->model->path) }}" height="100" width="150" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="/description/{{ $item->model->id }}">
                                                <p>{{ $item->model->name }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>Ksh. {{ $item->model->price }}</h5>
                                </td>
                                <td>
                                    <select class="prdqty" data-id="{{ $item->rowId }}">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </td>
                                <td>
                                    <h5>Ksh. {{ $item->subtotal }}</h5>
                                </td>
                                <td>
                                    <form action="{{ route('cart.remove', $item->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="button button-header"><i class="fa fa-trash" aria-hidden="true"></i></button>                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            <tr class="bottom_button">
                                <td>
                                    <form action="" method="POST">
                                        <a class="button" href="#">Update Cart</a>
                                    </form>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Coupon Code">
                                        <a class="primary-btn" href="#">Apply</a>
                                        <a class="button" href="#">Have a Coupon?</a>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>Ksh. {{ Cart::subtotal() }}</h5>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Tax (14% VAT)</h5>
                                </td>
                                <td>
                                    <h5>Ksh. {{ Cart::tax() }}</h5>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Total</h5>
                                </td>
                                <td>
                                    <h5>Ksh. {{ Cart::total() }}</h5>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="shipping_area">
                                <td class="d-none d-md-block">
                                </td>
                                <td></td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td></td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li><a href="#">Flat Rate: $5.00</a></li>
                                            <li><a href="#">Free Shipping</a></li>
                                            <li><a href="#">Flat Rate: $10.00</a></li>
                                            <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                        </ul>
                                        <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                        <select class="shipping_select">
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option value="4">Pakistan</option>
                                        </select>
                                        <select class="shipping_select">
                                            <option value="1">Select a State</option>
                                            <option value="2">Select a State</option>
                                            <option value="4">Select a State</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/Zipcode">
                                        <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td class="d-none-l">

                                </td>
                                <td class="">

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="#">Continue Shopping</a>
                                        <a class="primary-btn ml-2" href="/checkout">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                        <tr>
                            <p>No items in cart</p>
                        </tr>
                        <tr class="out_button_area">
                            <td class="d-none-l"></td>
                            <td class=""></td>
                            <td></td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="/">Continue Shopping</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</section>
<!--================End Cart Area =================-->

<!--================Start Extra Script Area =================-->
<script>
    (function() {
        const classname = document.querySelectorAll('.prdqty')
        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                axios.patch(`/cart/${id}`, {
                    quantity: this.value
                })
                .then(function(response) {
                    //console.log(response);
                    window.location.href = '{{ route('cart.index') }}'
                })
                .catch(function(error) {
                    console.log(error);
                    window.location.href = '{{ route('cart.index') }}'
                });
            })
        })
    })();
</script>
@include('layouts.includes.footer')
