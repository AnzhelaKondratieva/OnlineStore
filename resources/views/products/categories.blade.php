@extends('layouts.layout')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Categories</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<div class="clearfix filters-container m-t-10">
					<div class="row">
						<div class="col col-sm-12 col-md-6">
							<div class="col col-sm-3 col-md-6 no-padding">
								<div class="lbl-cnt">
									<span class="lbl">Sort by</span>
									<div class="fld inline">
										<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
											<button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
												Name: A to Z<span class="caret"></span>
											</button>

											<ul role="menu" class="dropdown-menu">
												<li role="presentation"><a href="#">Name: Z to A</a></li>
											</ul>
										</div>
									</div><!-- /.fld -->
								</div><!-- /.lbl-cnt -->
							</div><!-- /.col -->
						</div><!-- /.col -->
	</div><!-- /.row -->
</div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    @foreach($categories->where('parent_id',0) as $category)
                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">

                                                <div class="product">
                                                    <div class="product-info text-left">
                                                        <h1><b>{{$category->name}}</b></h1>
                                                        @foreach($category->child()->get() as $category_item)
                                                            <h2>{{$category_item->name}}</h2>
                                                            @foreach($category_item->child()->get() as $subcategory)
                                                                <p><a href="{{route('category-detail', ['slug' => $subcategory->slug])}}">{{$subcategory->name}}</a></p>
                                                            @endforeach
                                                        @endforeach
                                                    </div><!-- /.product-info -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                    @endforeach
								</div><!-- /.category-product -->
						</div><!-- /.tab-pane #list-container -->
					</div><!-- /.tab-content -->
				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection