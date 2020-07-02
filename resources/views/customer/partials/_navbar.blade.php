<body>
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="/"><img src="{{ asset('img/logo.png') }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="/products">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="/cart">Shopping Cart</a></li>
                </ul>
							</li>
{{--              <li class="nav-item submenu dropdown">--}}
{{--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"--}}
{{--                  aria-expanded="false">Blog</a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>--}}
{{--                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>--}}
{{--                  <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>--}}
{{--                </ul>--}}
{{--							</li>--}}
{{--							<li class="nav-item submenu dropdown">--}}
{{--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"--}}
{{--                  aria-expanded="false">Pages</a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>--}}
{{--                  <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>--}}
{{--                </ul>--}}
{{--              </li>--}}
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
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
            </ul>

            <ul class="nav-shop">
                <li class="nav-item">
                    <form action="/search" method="GET" class="search-form">
                        <i class="fa fa-search search-icon"></i>
                        <input type="text" name="query" id="query"  class="search-box" placeholder="Search for products...">
                    </form>
                </li>
{{--                {{Auth::user()->id}}--}}

                <li class="nav-item"><button> <a class="icon_btn" href="/wishlist/{{Auth::user()->id}}"><i class="lnr lnr lnr-heart"></i></a></button></li>

                <li class="nav-item">
                    <a href="{{ route('cart.index') }}" class="button button-header">
                        <b>Cart </b>
                        <button>
                            <i class="ti-shopping-cart"></i>
                            @if(Cart::instance('default')->count() > 0)
                                <span class="nav-shop__circle">{{ Cart::instance('default')->count() }}</span>
                            @endif
                        </button>
                    </a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->
