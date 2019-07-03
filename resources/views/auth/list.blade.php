@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-offset-3 col-md-6">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <a href="{{route('myaccount.create')}}">Add new user</a>
                <table width="100%">
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Email</td>
                        </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="{{route('myaccount',['id' => $user->id])}}">Edit</a></td>
                                    <td><a href="{{route('myaccount.delete',['id' => $user->id])}}">Delete</a></td>
                                </tr>
                            @endforeach
                </table>
            </div>
        </div>
        {{$users->links()}}
    </div>
@endsection