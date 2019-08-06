@extends('layouts.layout')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>{{$article->title}}</li>
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
		<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
		<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
	</div>
</div>
					<div class="comments outer-bottom-xs outer-top-xs">
						<div class="row">
							<div class="col-md-12">
								<h4>Comments</h4>
							</div>
							@foreach($comments as $comment)
								<div class="col-md-12">
									<span>{{$comment->name}}</span>
									<span>{{$comment->email}}</span>
									<span>{{$comment->text}}</span>
									<span>{{$comment->created_at}}</span>
								</div>
							@endforeach
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection