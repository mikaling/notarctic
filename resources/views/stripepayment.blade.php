


@extends('hometemplate')

@section('sessionname-list')

    @guest
        <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login </a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('/register')}}">Register</a></li>

    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest


@endsection
@section('main-page-content')
    <section class="blog-banner-area" id="category">
        <div class="col-md-12">
            <div class="order_box">
                <div class="text-center">
                    <br>
                    <h1>Pay via credit card</h1>
                    <link rel="stylesheet" href="{{ asset('/css/style1.css') }}" />
                    <script src="https://js.stripe.com/v3/"></script>
                    <form action="{{ url('stripecharge') }}" method="post" id="payment-form">
                        <div >
                            <p><input type="text" class="form-control" name="amount" placeholder="Enter Amount" value="{{ Cart::total() }}"/></p>
                            <p><input type="email" class="form-control" name="email" placeholder="Enter Email" /></p>
                            <label for="card-element">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>
                        <br>
                        <button class="button button-login">Submit Payment</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        var publishable_key = 'pk_test_51GuiySDSVAZTTXtTj6soTjZzhxRHIdHnXnE9HhC8iiCrpWhuQJHGzDTbZ4hcGKchqE6MT3rsWXQUf6pQDRld41J000cSrTafgT';
    </script>
    <script src="{{ asset('/js/card.js') }}"></script>
@endsection
