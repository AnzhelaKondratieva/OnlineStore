@extends('layouts.layout')
@section('content')
	<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="/home">Home</a></li>
				<li class='active'>Wishlist</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="my-wishlist-page">
			<div class="row">
				<div class="col-md-12 my-wishlist">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th colspan="4" class="heading-title">My Wishlist</th>
				</tr>
			</thead>
			<tbody>
			@foreach($wishlist as $wishlists)
				<tr>
					<td class="col-md-2"><img src="{{$wishlists->product->image_path}}" alt="img"></td>
					<td class="col-md-7">
						<div class="product-name"><a href="#">{{$wishlists->product->name}}</a></div>
						<div class="rating">
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star non-rate"></i>
						</div>
						<div class="price">
							{{$wishlists->product->price}}
						</div>
					</td>
					<td class="col-md-2">
						<form method="POST" action="{{route('shopping-cart.add')}}">
							@csrf

										<input type="hidden" name="id" value="{{$wishlists->product->id}}">
							<div class="col-sm-7">
								<button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
							</div>
						</form>
					</td>
					<td class="col-md-1 close-btn">
						<form method="POST" action="{{route('my-wishlist.destroy')}}">
							@csrf
							<input name="id" type="hidden" value="{{$wishlists->id}}">
							<button type="submit" title="cancel" class="icon"><i class="fa fa-times"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection