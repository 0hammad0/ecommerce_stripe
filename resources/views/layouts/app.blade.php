<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="app/img/icon.jpg">

    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}" />

    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}" />

    <!--Styles for RTL-->
    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->
    <!--External fonts-->

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css" />
</head>

<body class=" ">
    <header class="header" id="site-header">
        <div class="container">
            <div class="header-content-wrapper">
                <ul class="nav-add">
                    <li class="cart">
                        <a href="{{ url('cart') }}" class="js-cart-animate">
                            <i class="seoicon-basket"></i>
                            <span class="cart-count">{{ $carts->Count() }}</span>
                        </a>

                        <div class="cart-popup-wrap">
                            <div class="popup-cart">
                                <h4 class="title-cart">No products in the cart!</h4>
                                <p class="subtitle">Please make your choice.</p>
                                <div class="btn btn-small btn--dark">
                                    <span class="text">view all catalog</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="header-content" style="float: left">
                    <ul class="nav-add">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            &nbsp
                            &nbsp
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endguest

                        @if (Auth::user())
                            <li class="nav-item">
                                <h6><a href="/">{{ Auth::user()->name }}</a></h6>
                            </li>
                            &nbsp
                            &nbsp
                            &nbsp
                            &nbsp
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper">
        <div class="container">
            <div class="row pt120">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="heading align-center mb60">
                        <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>
                        <p class="heading-text">Buy books, and we ship to you.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Books products grid -->

        @yield('content')
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
    <script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
    <script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
    <script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
    <script src="{{ asset('app/js/form-actions.js') }}"></script>

    <script src="{{ asset('app/js/velocity.min.js') }}"></script>
    <script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>

    <!-- ...end JS Script -->
</body>

</html>
