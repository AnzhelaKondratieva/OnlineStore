@foreach(\App\Product::$categories as $url=>$main_category)
    <li class="dropdown yamm mega-menu">
        <a href="/{{$url}}" data-hover="dropdown" class="dropdown-toggle"
           data-toggle="dropdown">{{$main_category['type']}}</a>
        <ul class="dropdown-menu container">
            <li>
                <div class="yamm-content ">
                    <div class="row">
                        @foreach($main_category['subtype'] as $url => $subcategory)
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">{{$subcategory['name']}}</h2>
                                <ul class="links">
                                    @foreach($subcategory['children'] as $url => $products_type)
                                    <li><a href="/{{$url}}">{{$products_type}}</a></li>
                                    @endforeach
                                </ul>
                            </div><!-- /.col -->
                        @endforeach
                            <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                <img class="img-responsive" src="assets/images/banners/top-menu-banner.jpg" alt="">
                            </div><!-- /.yamm-content -->
                    </div>
                </div>

            </li>
        </ul>
    </li>
@endforeach
