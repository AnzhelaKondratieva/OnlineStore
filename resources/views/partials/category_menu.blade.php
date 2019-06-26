@foreach($categories->where('parent_id',0) as $category)
    <li class="dropdown yamm mega-menu">
        <a href="#" data-hover="dropdown" class="dropdown-toggle"
           data-toggle="dropdown">{{$category->name}}</a>
        <ul class="dropdown-menu container">
            <li>
                <div class="yamm-content ">
                    <div class="row">
                        @foreach($category->child()->get() as $category_item)
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">{{$category_item->name}}</h2>
                                <ul class="links">
                                    @foreach($category_item->child()->get() as $subcategory)
                                    <li><a href="#">{{$subcategory->name}}</a></li>
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
