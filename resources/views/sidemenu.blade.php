
    <body class="cnt-home">
		<!-- ================================== TOP NAVIGATION ================================== -->
		<div class="side-menu animate-dropdown outer-bottom-xs">
			<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
			<nav class="yamm megamenu-horizontal" role="navigation">
				<ul class="nav">
					@foreach(\App\Product::$categories as $url=>$main_category)
					<li class="dropdown menu-item">
						<a href="/{{$url}}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag"></i>{{$main_category['type']}}</a>
						<ul class="dropdown-menu mega-menu">
							<li class="yamm-content">
								<div class="row">
									@foreach($main_category['subtype'] as $url => $subcategory)
									<div class="col-sm-12 col-md-3">
										<h2 class="title">{{$subcategory['name']}}</h2>
										<ul class="links list-unstyled">
											@foreach($subcategory['children'] as $url => $products_type)
												<li><a href="/{{$url}}">{{$products_type}}</a></li>
											@endforeach
										</ul>
									</div><!-- /.col -->
										@endforeach
						</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->
					@endforeach
				</ul><!-- /.nav -->
			</nav><!-- /.megamenu-horizontal -->
		</div><!-- /.side-menu -->
		<!-- ================================== TOP NAVIGATION : END ================================== -->

	<!-- For demo purposes – can be removed on production -->
	
	
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
