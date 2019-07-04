@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-offset-2 col-md-8">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <a href="{{route('categories.create')}}">Add new category</a>
                <table width="100%" border="5px solid black" cellpadding="10%">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Parent_id</td>
                        <td>Is_publish</td>
                        <td>Slug</td>
                        <td>Created_at</td>
                        <td>Updated_at</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->parent_id}}</td>
                            <td>{{$category->is_publish}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td><a href="{{route('categories.edit', ['id' => $category->id])}}">Edit</a></td>
                            <td><a href="{{route('categories.delete',['id' => $category->id])}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{$categories->links()}}
    </div>
@endsection