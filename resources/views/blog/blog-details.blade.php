@extends('layouts.layout')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Blog Details</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">
					<div class="blog-post wow fadeInUp">
	<img class="img-responsive" src="{{$article->image_path}}" alt="">
	<h1>{{$article->title}}</h1>
	<span class="author">John Doe</span>
	<span class="review">7 Comments</span>
	<span class="date-time">{{$article->created_at}}</span>
						<p>{{$article->description}}</p>
						<div class="social-media">
		<span>share post:</span>
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href=""><i class="fa fa-rss"></i></a>
		<a href="" class="hidden-xs"><i class="fa fa-pinterest"></i></a>
	</div>
</div>
					<div class="blog-write-comment outer-bottom-xs outer-top-xs">
	<div class="row">
		<div class="col-md-12">
			<h4>Leave A Comment</h4>
		</div>
		<div class="col-md-4">
			<form class="register-form" role="form">
				<div class="form-group">
			    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
			    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="">
			  </div>
			</form>
		</div>
		<div class="col-md-4">
			<form class="register-form" role="form">
				<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
			    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
			  </div>
			</form>
		</div>
		<div class="col-md-4">
			<form class="register-form" role="form">
				<div class="form-group">
			    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
			    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="">
			  </div>
			</form>
		</div>
		<div class="col-md-12">
			<form class="register-form" role="form">
				<div class="form-group">
			    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
			    <textarea class="form-control unicase-form-control" id="exampleInputComments" ></textarea>
			  </div>
			</form>
		</div>
		<div class="col-md-12 outer-bottom-small m-t-20">
			<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit Comment</button>
		</div>
	</div>
</div>
				</div>
				<div class="col-md-3 sidebar">



					<div class="sidebar-module-container">
						<div class="search-area outer-bottom-small">
    <form>
        <div class="control-group">
            <input placeholder="Type to search" class="search-field">
            <a href="#" class="search-button"></a>
        </div>
    </form>
</div>
{{--				<div class="sidebar-widget outer-bottom-xs wow fadeInUp">--}}
{{--    <h3 class="section-title">tab widget</h3>--}}
{{--	<ul class="nav nav-tabs">--}}
{{--	  <li class="active"><a href="#popular" data-toggle="tab">popular post</a></li>--}}
{{--	  <li><a href="#recent" data-toggle="tab">recent post</a></li>--}}
{{--	</ul>--}}
{{--	<div class="tab-content" style="padding-left:0">--}}
{{--	   <div class="tab-pane active m-t-20" id="popular">--}}
{{--		<div class="blog-post inner-bottom-30 " >--}}
{{--			<h4><a href="/blog-details">Simple Blog Post</a></h4>--}}
{{--				<span class="review">6 Comments</span>--}}
{{--			<span class="date-time">12/06/16</span>--}}
{{--			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}
{{--			--}}
{{--		</div>--}}
{{--		<div class="blog-post" >--}}
{{--			<img class="img-responsive" src="assets/images/blog-post/blog_big_02.jpg" alt="">--}}
{{--			<h4><a href="/blog-details">Simple Blog Post</a></h4>--}}
{{--			<span class="review">6 Comments</span>--}}
{{--			<span class="date-time">23/06/16</span>--}}
{{--			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}
{{--			--}}
{{--		</div>--}}
{{--	</div>--}}

{{--	<div class="tab-pane m-t-20" id="recent">--}}
{{--		<div class="blog-post inner-bottom-30" >--}}
{{--			<img class="img-responsive" src="assets/images/blog-post/blog_big_03.jpg" alt="">--}}
{{--			<h4><a href="/blog-details">Simple Blog Post</a></h4>--}}
{{--			<span class="review">6 Comments</span>--}}
{{--			<span class="date-time">5/06/16</span>--}}
{{--			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}
{{--			--}}
{{--		</div>--}}
{{--		<div class="blog-post">--}}
{{--			<img class="img-responsive" src="assets/images/blog-post/blog_big_01.jpg" alt="">--}}
{{--			<h4><a href="/blog-details">Simple Blog Post</a></h4>--}}
{{--			<span class="review">6 Comments</span>--}}
{{--			<span class="date-time">10/07/16</span>--}}
{{--			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>--}}
{{--			--}}
{{--		</div>--}}
{{--	</div>--}}
{{--	</div>--}}
{{--</div>--}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection