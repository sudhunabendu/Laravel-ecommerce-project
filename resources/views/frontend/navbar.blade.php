<header id="header">
  <!--header-->
  <div class="header_top">
    <!--header_top-->
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contactinfo">
            <ul class="nav nav-pills">
              <li><a href="#"><i class="fa fa-phone"></i> +91 9875614547</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> nabendubose1991@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="social-icons pull-right">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/header_top-->

  <div class="header-middle">
    <!--header-middle-->
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="logo pull-left">
            <a href="{{route('index')}}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
          </div>
          <!-- <div class="btn-group pull-right">
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                USA
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Canada</a></li>
                <li><a href="#">UK</a></li>
              </ul>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                DOLLAR
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Canadian Dollar</a></li>
                <li><a href="#">Pound</a></li>
              </ul>
            </div>
          </div> -->
        </div>
        <div class="col-sm-8">
          <div class="shop-menu pull-right">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
              <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
              <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
              <li><a href="{{route('/cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
              @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/header-middle-->

  <div class="header-bottom">
    <!--header-bottom-->
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="mainmenu pull-left">
            <ul class="nav navbar-nav collapse navbar-collapse">
              <li><a href="{{route('index')}}" class="active">Home</a></li>
              <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="sub-menu">
                  <li><a href="{{route('products')}}">Products</a></li>
                  <li><a href="product-details.html">Product Details</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="login.html">Login</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="sub-menu">
                  <li><a href="blog.html">Blog List</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
              </li>
              <li><a href="{{route('not_found')}}">404</a></li>
              <li><a href="contact-us.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <form action="{{route('search')}}" method="get">
          <div class="col-sm-3">
            <div class="search_box pull-right">
              <input type="text" name="search" placeholder="Search" />
              <div class="input-group-append">
                <button type="button" hidden></button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!--/header-bottom-->
</header>