@extends('layouts.layout')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                 @include('partials.sidemenu')
                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">hot deals</h3>
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                    @foreach($product as $product_item)
                        <div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <div class="image">
                                        <img src="{{$product_item->image_path}}" alt="">
                                    </div>
                                    <div class="sale-offer-tag"><span>49%<br>off</span></div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box">
                                                <span class="key">120</span>
                                                <span class="value">DAYS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="hour box">
                                                <span class="key">20</span>
                                                <span class="value">HRS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper">
                                            <div class="minutes box">
                                                <span class="key">36</span>
                                                <span class="value">MINS</span>
                                            </div>
                                        </div>

                                        <div class="box-wrapper hidden-md">
                                            <div class="seconds box">
                                                <span class="key">60</span>
                                                <span class="value">SEC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.hot-deal-wrapper -->

                                <div class="product-info text-left m-t-20">
                                    <h3 class="name"><a href="{{route('product', ['id' => $product_item->id])}}">{{$product_item->name}}</a></h3>
                                    <div class="rating rateit-small"></div>

                                    <div class="product-price">
								<span class="price">
									{{$product_item->price}}
								</span>

                                        <span class="price-before-discount">$800.00</span>

                                    </div><!-- /.product-price -->

                                </div><!-- /.product-info -->

                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                            <a href="{{route('product', ['id' => $product_item->id])}}" class="btn btn-primary cart-btn" type="submit">View</a>
                                    </div><!-- /.action -->
                                </div><!-- /.cart -->
                            </div>
                        </div>
                        @endforeach
                    </div><!-- /.sidebar-widget -->
                </div>
                <!-- ============================================== HOT DEALS: END ============================================== -->
                     <!-- ============================================== SPECIAL OFFER ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Offer</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                @foreach($product as $product_item)
                                <div class="products special-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{route('product', ['id' => $product_item->id])}}">
                                                                <img src="{{$product_item->image_path}}" alt="" width="20px">
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="{{route('product', ['id' => $product_item->id])}}">{{$product_item->name}}</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					{{$product_item->price}}			</span>

                                                        </div><!-- /.product-price -->

                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->

                                    </div>
                                </div>
                                @endforeach
                                    </div>
                                </div>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->
                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Deals</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products special-product">
                                    @foreach($product as $product_item)
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="{{$product_item->image_path}}" alt="">
                                                            </a>
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="{{route('product', ['id' => $product_item->id])}}">{{$product_item->name}}</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					{{$product_item->price}}</span>
                                                        </div><!-- /.product-price -->
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->
                <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
                    <h3 class="section-title">Newsletters</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <p>Sign Up for Our Newsletter!</p>
                        <form role="form">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Subscribe to our newsletter">
                            </div>
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->

                <!-- ============================================== Testimonials============================================== -->
                <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
                    <div id="advertisement" class="advertisement">
                        <div class="item">
                            <div class="avatar"><img src="{{asset('/assets/images/testimonials/member1.png')}}" alt="Image"></div>
                            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis.
                                Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                            <div class="clients_author">John Doe <span>Abc Company</span></div>
                            <!-- /.container-fluid -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="avatar"><img src="{{asset('/assets/images/testimonials/member3.png')}}" alt="Image"></div>
                            <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis.
                                Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                            <div class="clients_author">Stephen Doe <span>Xperia Designs</span></div>
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="avatar"><img src="{{asset('/assets/images/testimonials/member2.png')}}" alt="Image"></div>
                            <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis.
                                Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                            <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span></div>
                            <!-- /.container-fluid -->
                        </div><!-- /.item -->

                    </div><!-- /.owl-carousel -->
                </div>

                <!-- ============================================== Testimonials: END ============================================== -->

                <div class="home-banner">
                    <img class="img-responsive" src="{{asset('/assets/images/banners/onlineshopping.jpg')}}" alt="Image">
                </div>


            </div><!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="item" style="background-image: url(assets/images/sliders/first.jpeg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Top Brands</div>
                                    <div class="big-text fadeInDown-1">
                                        New Collections
                                    </div>

                                    <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>

                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="{{route('categories')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                        <div class="item" style="background-image: url(assets/images/sliders/second.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Spring 2016</div>
                                    <div class="big-text fadeInDown-1">
                                       <span class="highlight">Fashion</span>
                                    </div>

                                    <div class="excerpt fadeInDown-2 hidden-xs">

                                        <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span>

                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="{{route('categories')}}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->


                    </div><!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->

                <!-- ============================================== INFO BOXES ============================================== -->
                <div class="info-boxes wow fadeInUp">
                    <div class="info-boxes-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">

                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">money back</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">30 Days Money Back Guarantee</h6>
                                </div>
                            </div><!-- .col -->

                            <div class="hidden-md col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">

                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">free shipping</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Shipping on orders over $99</h6>
                                </div>
                            </div><!-- .col -->

                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">

                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">Special Sale</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Extra $5 off on all items </h6>
                                </div>
                            </div><!-- .col -->
                        </div><!-- /.row -->
                    </div><!-- /.info-boxes-inner -->

                </div><!-- /.info-boxes -->
                <!-- ============================================== INFO BOXES : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" src="{{asset('assets/images/banners/homebanner.jpg')}}" alt="">
                                </div>

                            </div><!-- /.wide-banner -->
                        </div><!-- /.col -->
                        <div class="col-md-5 col-sm-5">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" src="{{asset('assets/images/banners/homebanner2.jpg')}}" alt="">
                                </div>

                            </div><!-- /.wide-banner -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" src="{{asset('assets/images/banners/homebanner3.jpg')}}" alt="">
                                </div>
                                <div class="strip strip-text">
                                    <div class="strip-inner">
                                        <h2 class="text-right">New Mens Fashion<br>
                                            <span class="shopping-needs">Save up to 40% off</span></h2>
                                    </div>
                                </div>
                                <div class="new-label">
                                    <div class="text">NEW</div>
                                </div><!-- /.new-label -->
                            </div><!-- /.wide-banner -->
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.wide-banners -->
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                <!-- ============================================== BEST SELLER ============================================== -->

                <div class="best-deal wow fadeInUp outer-bottom-xs">
                    <h3 class="section-title">Best seller</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products best-product">
                                    @foreach($product as $product_item)
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="#">
                                                                <img src="{{$product_item->image_path}}" alt="">
                                                            </a>
                                                        </div><!-- /.image -->


                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col2 col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="{{route('product', ['id' => $product_item->id])}}">{{$product_item->name}}</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price">
				<span class="price">
					{{$product_item->price}}</span>

                                                        </div><!-- /.product-price -->

                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== BEST SELLER : END ============================================== -->

                <!-- ============================================== BLOG SLIDER ============================================== -->
                <section class="section latest-blog outer-bottom-vs wow fadeInUp">
                    <h3 class="section-title">latest form blog</h3>
                    <div class="blog-slider-container outer-top-xs">
                        <div class="owl-carousel blog-slider custom-carousel">
@foreach($article as $article_item)

                            <div class="item">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <div class="image">
                                            <a href="{{route('blog-details', ['slug' => $article_item->slug])}}"><img src="{{$article_item->image_path}}" alt=""></a>
                                        </div>
                                    </div><!-- /.blog-post-image -->


                                    <div class="blog-post-info text-left">
                                        <h3 class="name"><a href="{{route('blog-details', ['slug' => $article_item->slug])}}">{{$article_item->title}}</a>
                                        </h3>
                                        <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                                        <p class="text">{{$article_item->description}}</p>
                                        <a href="{{route('blog-details', ['slug' => $article_item->slug])}}" class="lnk btn btn-primary">Read more</a>
                                    </div><!-- /.blog-post-info -->


                                </div><!-- /.blog-post -->
                            </div><!-- /.item -->
@endforeach
                        </div><!-- /.owl-carousel -->
                    </div><!-- /.blog-slider-container -->
                </section><!-- /.section -->
                <!-- ============================================== BLOG SLIDER : END ============================================== -->
            </div><!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
@endsection
