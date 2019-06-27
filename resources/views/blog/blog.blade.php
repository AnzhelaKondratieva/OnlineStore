@extends('layouts.layout')
@section('content')
<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-sm-12 col-md-12">
					@foreach($article as $article_item)
					<div class="blog-post  wow fadeInUp">
	<a href="{{route('blog-details', ['slug' => $article_item->slug])}}"><img class="img-responsive" src="{{$article_item->image_path}}" alt=""></a>
	<h1><a href="{{route('blog-details', ['slug' => $article_item->slug])}}">{{$article_item->title}}</a></h1>
	<span class="author">John Doe</span>
	<span class="review">6 Comments</span>
	<span class="date-time">{{$article_item->created_at}}</span>
	<p>{{$article_item->description}}</p>
	<a href="#" class="btn btn-upper btn-primary read-more">read more</a>
</div>
					@endforeach
					{{$article->links()}}
				</div>
			</div>
		</div>
		</div>
</div>
@endsection