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
                              action="{{route('blog.save', ['id' => $article->id])}}"
                            @else
                                action="{{route('blog.save')}}"
                            @endif enctype = "multipart/form-data"
                            >
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
                                    <label for="image_path" class="col-md-4 col-form-label text-md-right">Image_path</label>

                                    <div class="col-md-6">
                                        <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" value="@if(isset($article)){{$article->image_path}}@endif" autofocus>

                                        @error('image_path')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="is_publish" class="col-md-4 col-form-label text-md-right">Is_publish</label>

                                    <div class="col-md-6">
                                        <input id="is_publish" type="text" class="form-control @error('is_publish') is-invalid @enderror" name="is_publish" value ="@if(isset($article)){{$article->is_publish}}@endif">

                                        @error('is_publish')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="slug" class="col-md-4 col-form-label text-md-right">Slug</label>

                                    <div class="col-md-6">
                                        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value ="@if(isset($article)){{$article->slug}}@endif">

                                        @error('slug')
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
