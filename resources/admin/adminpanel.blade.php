@extends('views.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table width="100%" border="5px solid black" cellpadding="5%">
                    <tr>
                        <td><a href="{{route('admin.accountsList')}}">Пользователи</a></td>
                        <td><a href="{{route('admin.blogList')}}">Статьи</a></td>
                        <td><a href="{{route('admin.categoryList')}}">Категории</a></td>
                        <td><a href="{{route('admin.productList')}}">Продукты</a></td>
                        <td><a href="{{route('admin.ordersList')}}">Заказы</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection