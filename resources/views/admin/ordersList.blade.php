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
                <a href="{{route('admin.ordersCreate')}}">Add new product</a>
                <table width="100%" border="5px solid black" cellpadding="5%">
                    <tr>
                        <td>Id</td>
                        <td>User_id</td>
                        <td>Created at</td>
                        <td>Updated at</td>
                        <td>Phone</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->user_id}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->updated_at}}</td>
                            <td>{{$order->phone}}</td>
                            <td><a href="{{route('admin.ordersEdit',['id' => $order->id])}}">Edit</a></td>
                            <td><a href="{{route('admin.ordersDelete',['id' => $order->id])}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{$orders->links()}}
    </div>
@endsection