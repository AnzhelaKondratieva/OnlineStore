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
                <a href="{{route('admin.myAccountCreate')}}">Add new user</a>
                <table width="100%" border="5px solid black" cellpadding="10%">
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Role</td>
                            <td>Created at</td>
                            <td>Updated at</td>
                            <td></td>
                            <td></td>
                        </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td><a href="{{route('admin.myAccountEdit',['id' => $user->id])}}">Edit</a></td>
                                    <td><a href="{{route('admin.myAccountDelete',['id' => $user->id])}}">Delete</a></td>
                                </tr>
                            @endforeach
                </table>
            </div>
        </div>
        {{$users->links()}}
    </div>
@endsection