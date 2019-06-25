@extends('layouts.layout')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Handbags</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row'>
			<div class='col-md-3 sidebar'>
	            @include ('partials.sidemenu');
<!-- ================================== TOP NAVIGATION : END ================================== -->
				<div class="sidebar-module-container">
	            	<div class="sidebar-filter">
		            	<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp">
<h3 class="section-title">shop by</h3>
	<div class="widget-header">
		<h4 class="widget-title">Category</h4>
	</div>
	<div class="sidebar-widget-body">
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Camera
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed">
	                  Desktops
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Pants
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Bags
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed">
	                  Hats
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed">
	                 Accessories
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

		            	<!-- ============================================== PRICE SILDER============================================== -->
						<div class="sidebar-widget wow fadeInUp">
							<div class="widget-header">
								<h4 class="widget-title">Price Slider</h4>
							</div>
							<div class="sidebar-widget-body m-t-10">
								<div class="price-range-holder">
      	    <span class="min-max">
                 <span class="pull-left">$5.00</span>
                 <span class="pull-right">$1000.00</span>
            </span>
									<input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">

									<input type="text" class="price-slider" value="" >

								</div><!-- /.price-range-holder -->
								<a href="#" class="lnk btn btn-primary">Show Now</a>
							</div><!-- /.sidebar-widget-body -->
						</div><!-- /.sidebar-widget -->
<!-- ============================================== PRICE SILDER : END ============================================== -->
		            	<!-- ============================================== MANUFACTURES============================================== -->
<div class="sidebar-widget wow fadeInUp">
	<div class="widget-header">
		<h4 class="widget-title">Manufactures</h4>
	</div>
	<div class="sidebar-widget-body">
		<ul class="list">
            <li><a href="#">Forever 18</a></li>
            <li><a href="#">Nike</a></li>
            <li><a href="#">Dolce & Gabbana</a></li>
            <li><a href="#">Alluare</a></li>
            <li><a href="#">Chanel</a></li>
            <li><a href="#">Other Brand</a></li>
          </ul>
        <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== MANUFACTURES: END ============================================== -->
		            	<!-- ============================================== COLOR============================================== -->
<div class="sidebar-widget wow fadeInUp">
	<div class="widget-header">
		<h4 class="widget-title">Colors</h4>
	</div>
	<div class="sidebar-widget-body">
		<ul class="list">
            <li><a href="#">Red</a></li>
            <li><a href="#">Blue</a></li>
            <li><a href="#">Yellow</a></li>
            <li><a href="#">Pink</a></li>
            <li><a href="#">Brown</a></li>
            <li><a href="#">Teal</a></li>
          </ul>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== COLOR: END ============================================== -->
		            	<!-- ============================================== COMPARE============================================== -->
<div class="sidebar-widget wow fadeInUp outer-top-vs">
    <h3 class="section-title">Compare products</h3>
	<div class="sidebar-widget-body">
		<div class="compare-report">
			<p>You have no <span>item(s)</span> to compare</p>
		</div><!-- /.compare-report -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== COMPARE: END ============================================== -->
		            	<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
	<h3 class="section-title">Product tags</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">
			<a class="item" title="Phone" href="/category">Phone</a>
			<a class="item active" title="Vest" href="/category">Vest</a>
			<a class="item" title="Smartphone" href="/category">Smartphone</a>
			<a class="item" title="Furniture" href="/category">Furniture</a>
			<a class="item" title="T-shirt" href="/category">T-shirt</a>
			<a class="item" title="Sweatpants" href="/category">Sweatpants</a>
			<a class="item" title="Sneaker" href="/category">Sneaker</a>
			<a class="item" title="Toys" href="/category">Toys</a>
			<a class="item" title="Rose" href="/category">Rose</a>
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->
<div class="home-banner">
<img src="assets/images/banners/LHS-banner.jpg" alt="Image">
</div> 

	            	</div><!-- /.sidebar-filter -->
	            </div><!-- /.sidebar-module-container -->
            </div><!-- /.sidebar -->
			<div class='col-md-9'>
				<div class="clearfix filters-container m-t-10">
					<div class="row">
						<div class="col col-sm-6 col-md-2">
							<div class="filter-tabs">
								<ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
									<li class="active">
										<a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a>
									</li>
									<li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
								</ul>
							</div><!-- /.filter-tabs -->
						</div><!-- /.col -->
						<div class="col col-sm-12 col-md-6">
							<div class="col col-sm-3 col-md-6 no-padding">
								<div class="lbl-cnt">
									<span class="lbl">Sort by</span>
									<div class="fld inline">
										<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
											<button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
												Position <span class="caret"></span>
											</button>

											<ul role="menu" class="dropdown-menu">
												<li role="presentation"><a href="#">Price: Lowest first</a></li>
												<li role="presentation"><a href="#">Price: Highest first</a></li>
												<li role="presentation"><a href="#">Product Name: A to Z</a></li>
												<li role="presentation"><a href="#">Product Name: Z to A</a></li>
												<li role="presentation"><a href="#">New</a></li>
												<li role="presentation"><a href="#">Popular</a></li>
											</ul>
										</div>
									</div><!-- /.fld -->
								</div><!-- /.lbl-cnt -->
							</div><!-- /.col -->
							<div class="col col-sm-3 col-md-6 no-padding">
								<div class="lbl-cnt">
									<span class="lbl">Show</span>
									<div class="fld inline">
										<div class="dropdown dropdown-small dropdown-med dropdown-white inline">
											<button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
												1 <span class="caret"></span>
											</button>

											<ul role="menu" class="dropdown-menu">
												<li role="presentation"><a href="#">1</a></li>
												<li role="presentation"><a href="#">2</a></li>
												<li role="presentation"><a href="#">5</a></li>
												<li role="presentation"><a href="#">10</a></li>
												<li role="presentation"><a href="#">20</a></li>
												<li role="presentation"><a href="#">40</a></li>
												<li role="presentation"><a href="#">50</a></li>
											</ul>
										</div>
									</div><!-- /.fld -->
								</div><!-- /.lbl-cnt -->
							</div><!-- /.col -->
						</div><!-- /.col -->
		<div class="col col-sm-6 col-md-4 text-right">
			<div class="pagination-container">
	<ul class="list-inline list-unstyled">
		<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
		<li><a href="#">1</a></li>	
		<li class="active"><a href="#">2</a></li>	
		<li><a href="#">3</a></li>	
		<li><a href="#">4</a></li>	
		<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
	</ul><!-- /.list-inline -->
</div><!-- /.pagination-container -->		</div><!-- /.col -->
	</div><!-- /.row -->
</div>
				<div class="search-result-container ">
					<div id="myTabContent" class="tab-content category-list">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product">
								<div class="row">
									@if(isset($categories))
										@foreach($categories as $category_item)
		<div class="col-sm-6 col-md-4 wow fadeInUp">
			<div class="products">

	<div class="product">
		<div class="product-info text-left">
			<h3 class="name"><a href="#"><b>{{$category_item['name']}}</b></a></h3>
		</div><!-- /.product-info -->
			</div><!-- /.product -->

			</div><!-- /.products -->
		</div><!-- /.item -->
										@endforeach
									@endif
								</div><!-- /.category-product -->
						</div><!-- /.tab-pane #list-container -->
					</div><!-- /.tab-content -->
					<div class="clearfix filters-container">
						
							<div class="text-right">
						         <div class="pagination-container">
	<ul class="list-inline list-unstyled">
		<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
		<li><a href="#">1</a></li>	
		<li class="active"><a href="#">2</a></li>	
		<li><a href="#">3</a></li>	
		<li><a href="#">4</a></li>	
		<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
	</ul><!-- /.list-inline -->
</div><!-- /.pagination-container -->						    </div><!-- /.text-right -->
						
					</div><!-- /.filters-container -->

				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div><!-- /.row -->
</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection