@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <a href="{{route('products.create')}}">Add new user</a>
                <table width="100%" border="5px solid black" cellpadding="5%">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Articul</td>
                        <td>Brand</td>
                        <td>Image</td>
                        <td>Description</td>
                        <td>Price</td>
                        <td>Category_id</td>
                        <td>Is publish</td>
                        <td>Created at</td>
                        <td>Updated at</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->articul}}</td>
                            <td>{{$product->brand}}</td>
                            <td>{{$product->image_path}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->category_id}}</td>
                            <td>{{$product->is_publish}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td><a href="{{route('products.edit',['id' => $product->id])}}">Edit</a></td>
                            <td><a href="{{route('products.delete',['id' => $product->id])}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{$products->links()}}
    </div>
@endsection