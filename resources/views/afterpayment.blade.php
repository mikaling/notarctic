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
    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Payment is successful. Thank you for shopping</h1>
                    <br>
                    <a href="{{ url('/') }}" class="button button-login"><i class="fa fa-arrow-left"></i> &nbsp Continue shopping</a>
                    
                </div>
            </div>
        </div>
    </section>
    @endsection