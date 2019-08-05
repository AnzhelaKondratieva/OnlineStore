@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Categories') }}</div>

                    <div class="card-body">
                        <form method="POST"
                              @if(isset($category))
                              action="{{route('admin.categorySave', ['id' => $category->id])}}">
                            @else
                                action="{{route('admin.categorySave')}}">
                            @endif
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if(isset($category)){{$category->name}}@endif" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="@if(isset($category)){{$category->description}}@endif" autofocus>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="parent_id" class="col-md-4 col-form-label text-md-right">Parent_id</label>

                                <div class="col-md-6">
                                    <input id="parent_id" type="text" class="form-control @error('parent_id') is-invalid @enderror" name="parent_id" value ="@if(isset($category)){{$category->parent_id}}@endif">

                                    @error('parent_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="is_publish" class="col-md-4 col-form-label text-md-right">Is_publish</label>

                                    <div class="col-md-6">
                                        <input id="is_publish" type="text" class="form-control @error('is_publish') is-invalid @enderror" name="is_publish" value ="@if(isset($category)){{$category->is_publish}}@endif">

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
                                        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value ="@if(isset($category)){{$category->slug}}@endif">

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
