
    <body class="cnt-home">
		<!-- ================================== TOP NAVIGATION ================================== -->
		<div class="side-menu animate-dropdown outer-bottom-xs">
			<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
			<nav class="yamm megamenu-horizontal" role="navigation">
				<ul class="nav">
					@foreach($categories->where('parent_id',0) as $category)
					<li class="dropdown menu-item">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag"></i>{{$category->name}}</a>
						<ul class="dropdown-menu mega-menu">
							<li class="yamm-content">
								<div class="row">
									@foreach($category->child()->get() as $category_item)
									<div class="col-sm-12 col-md-3">
										<h2 class="title">{{$category_item->name}}</h2>
										<ul class="links list-unstyled">
											@foreach($category_item->child()->get() as $subcategory)
												<li><a href="#">{{$subcategory->name}}</a></li>
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