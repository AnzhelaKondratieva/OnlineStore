
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        @if(\Auth::user())
                        <li><a href="{{route('admin.myAccountEdit', ['id' => \Auth::user()->id])}}"><i class="icon fa fa-user"></i>My Account</a></li>
                        @endif
                        <li><a href="{{route('my-wishlist')}}"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="{{route('shopping-cart')}}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="{{route('checkout')}}"><i class="icon fa fa-check"></i>Checkout</a></li>
                            @if(!\Auth::user())
                                <li><a href="{{route('login')}}"><i class="icon fa fa-lock"></i>Login</a></li>
                            @else
                                <li><a href="{{route('logout')}}"><i class="icon fa fa-lock"></i>Logout</a></li>
                            @endif
                            @if(!\Auth::user())
                                <li><a href="{{route('register')}}"><i class="icon fa fa-lock"></i>Register</a></li>
                            @endif
                    </ul>
                </div><!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span
                                        class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span
                                        class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('assets/images/logo.png')}}" alt="">
                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('categories')}}">Categories <b
                                                    class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">-
                                                    Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">-
                                                    Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">-
                                                    Health & Beauty</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" placeholder="Search here..."/>
                                <a class="search-button" href="#"></a>
                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
{{--                    {{dd($cartproducts)}}--}}
                    <!-- ==================== ========================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="dropdown dropdown-cart">
                        @foreach($cartproducts as $product)
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count">{{$product['count']}}</span></div>
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
						<span class="sign">$</span><span class="value"></span>
					</span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="/detail"><img src="assets/images/cart.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

{{--                                            <h3 class="name"><a href="index.php?page-detail">{{$product->name}}</a></h3>--}}
{{--                                            <div class="price">{{$product->price}}</div>--}}
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="{{route('shopping-cart')}}"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                    <div class="pull-right">

{{--                                        <span class="text">Sub Total :</span><span class='price'>{{$product->sum}}</span>--}}
                                    </div>
                                    <div class="clearfix"></div>

                                    <a href="{{route('checkout')}}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div><!-- /.cart-total-->
                            </li>
                        </ul><!-- /.dropdown-menu-->
                        @endforeach
{{--                    </div><!-- /.dropdown-cart -->--}}

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div><!-- /.top-cart-row -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-header -->
    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a href="{{route('home')}}" data-hover="dropdown" class="dropdown-toggle"
                                       data-toggle="dropdown">Home</a>
                                </li>
                                @include('partials.category_menu')
                                <li class="dropdown  navbar-right special-menu">
                                    <a href="#">Todays offer</a>
                                </li>
                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                            </ul>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->
    </div><!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->
</header>

<!-- ============================================== HEADER : END ============================================== -->

