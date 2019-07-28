@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Sign In</h1>
		@if(count($errors) > 0)
			@foreach($error->all() as $error)
			<div class="alert alert-danger">
				<p>{{ $error }}</p>
			</div>
			@endforeach
		@endif
		<form action="{{ route('user.signin')}}" method="post">
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Sign Up</button>
			{{ csrf_field()}}

			<div class="form-group">
				<div class="col-md-12">
					<a href="{{ url('/auth/facebook') }}" class="btn btn-facebook">
						<i class="fa fa-facebook"></i>
						Sign up with Facebook
					</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection