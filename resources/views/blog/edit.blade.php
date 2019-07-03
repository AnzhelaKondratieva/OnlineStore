@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Article') }}</div>

                    <div class="card-body">
                        <form method="POST"
                              @if(isset($article))
                              action="{{route('blog.save', ['id' => $article->id])}}">
                            @else
                                action="{{route('blog.save')}}">
                            @endif
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="@if(isset($article)){{$article->title}}@endif" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="@if(isset($article)){{$article->description}}@endif" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Image</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="@if(isset($article)){{$article->image}}@endif" autofocus>

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
