@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table width="100%" border="5px solid black" cellpadding="5%">
                    <tr>
                        <td><a href="{{route('accounts.list')}}">Пользователи</a></td>
                        <td><a href="{{route('blog.list')}}">Статьи</a></td>
                        <td><a href="{{route('categories.list')}}">Категории</a></td>
                        <td><a href="{{route('products.list')}}">Продукты</a></td>
                        <td><a href="{{route('orders.list')}}">Заказы</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection