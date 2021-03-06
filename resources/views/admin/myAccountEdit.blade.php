@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Login') }}</div>

					<div class="card-body">
						<form method="POST"
							  @if(isset($user))
							  action="{{route('admin.myAccountSave', ['id' => $user->id])}}">
								@else
								action="{{route('admin.myAccountSave')}}">
							@endif
							@csrf

							<div class="form-group row">
								<label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

								<div class="col-md-6">
									<input id="email" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if(isset($user)){{$user->name}}@endif" autofocus>

									@error('name')
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="name" class="col-md-4 col-form-label text-md-right">Email</label>

								<div class="col-md-6">
									<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="@if(isset($user)){{$user->email}}@endif" autofocus>

									@error('email')
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value ="">

									@error('password')
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
								</div>
							</div>

									<div class="form-group row">
										<label for="role" class="col-md-4 col-form-label text-md-right">Role</label>

										<div class="col-md-6">
											<input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value ="@if(isset($user)){{$user->role}}@endif">

											@error('role')
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
