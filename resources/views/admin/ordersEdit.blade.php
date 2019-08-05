@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Orders') }}</div>

                    <div class="card-body">
                        <form method="POST"
                              @if(isset($product))
                              action="{{route('admin.ordersSave', ['id' => $order->id])}}">
                            @else
                                action="{{route('admin.ordersSave')}}">
                            @endif
                            @csrf

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="@if(isset($order)){{$order->phone}}@endif" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">User_id</label>

                                <div class="col-md-6">
                                    <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="@if(isset($order)){{$order->user_id}}@endif" autofocus>

                                    @error('user_id')
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
