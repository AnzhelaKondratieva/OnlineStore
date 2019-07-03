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
                <a href="{{route('blog.create')}}">Add new article</a>
                <table width="100%">
                    <tr>
                        <td>Id</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Image</td>
                    </tr>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->description}}</td>
                            <td>{{$article->image}}</td>
                            <td><a href="{{route('blog.edit', ['id' => $article->id])}}">Edit</a></td>
                            <td><a href="{{route('blog.delete',['id' => $article->id])}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{$articles->links()}}
    </div>
@endsection