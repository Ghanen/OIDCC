@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="bglogin">
					<div class="panel-heading">
						<h3 class="panel-title" id="lititle" align="center">Login</h3>
					</div>
				</div>

				<div class="panel-body">
					<form action="/login" method="POST">
						{{ csrf_field() }}

						@if(session('error'))
							<div class="alert alert-danger">
								{{ session('error') }}	
							</div>
						@endif

						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}	
							</div>
						@endif
						
						<div class="form-group">
							<label for="email">Email address:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
							</div>				
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>				
						</div>

						<div class="form-group">
							<label for="comapany">Company name</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
							</div>				
						</div>

						<div class="form-group">
							<div class="input-group"> 
								<input type="checkbox" name="remember_me">Remember me
							</div>				
						</div>

						<a href="/forget-password">Forgot your password?</a>

						<div class="form-group">
								<input type="submit" value="Login" class="btn btn-primary pull-right">				
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
