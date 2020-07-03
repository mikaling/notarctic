 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arctic Shop - Home</title>
	<link rel="icon" href="{{asset('templateresources/img/Fevicon.png')}}" type="image/png">
  <link rel="stylesheet" href="{{asset('templateresources/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('templateresources/vendors/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('templateresources/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('templateresources/vendors/nice-select/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('templateresources/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('templateresources/vendors/owl-carousel/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{asset('templateresources/css/style.css')}}">
</head>
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
                        @guest

                        @else

                            <li class="nav-item"><button> <a class="icon_btn" href="/wishlist/{{Auth::user()->id}}"><i class="lnr lnr lnr-heart"></i></a></button></li>
                        @endguest
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


  <main class="site-main">

    <!--================ Hero banner start =================-->






    <section class="hero-banner">
     @yield('landing-page-first-section')
    </section>




    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->

    <!--add function for rendering images from the database-->
    <section class="section-margin mt-0">
      @yield('main-page-content')

    </section>
    <!-- ================ Best Selling item  carousel end ================= -->

    <!-- ================ Blog section start ================= -->
    <section class="blog">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Latest <span class="section-intro__style">News</span></h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="{{asset('templateresources/img/blog/blog1.png')}}" alt="">

              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Admin</a></li>

                </ul>
                <h4 class="card-blog__title"><a href="single-blog.html">The Richland Center Shooping News and weekly shooper</a></h4>
                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="{{asset('templateresources/img/blog/blog2.png')}}" alt="">

              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Admin</a></li>

                </ul>
                <h4 class="card-blog__title"><a href="single-blog.html">The Shopping News also offers top-quality printing services</a></h4>
                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="{{asset('templateresources/img/blog/blog3.png')}}" alt="">

              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Admin</a></li>

                </ul>
                <h4 class="card-blog__title"><a href="single-blog.html">Professional design staff and efficient equipment you’ll find we offer</a></h4>
                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Blog section end ================= -->

    <!-- ================ Subscribe section start ================= -->
    <section class="subscribe-position">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">Get Update From Anywhere</h3>
          <p>Bearing Void gathering light light his eavening unto dont afraid</p>
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
                <div class="info"></div>
              </div>
              <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- ================ Subscribe section end ================= -->



  </main>


  <!--================ Start footer Area  =================-->
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								Here at Arctic we strive our best to provide quality technology products in the market.
							</p>

						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="#">Home</a></li>
								<li><a href="#">Shop</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Product</a></li>
								<li><a href="#">Brand</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, Main Street, Your City</p>

								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>

								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</footer>
	<!--================ End footer Area  =================-->



  <script src="{{asset('templateresources/vendors/jquery/jquery-3.2.1.min.js')}}"></script>

  <script src="{{asset('templateresources/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('templateresources/vendors/skrollr.min.js')}}"></script>
  <script src="{{asset('templateresources/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('templateresources/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('templateresources/vendors/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('templateresources/vendors/mail-script.js')}}"></script>
  <script src="{{asset('templateresources/vendors/mail-script.js')}}"></script>
</body>
</html>
