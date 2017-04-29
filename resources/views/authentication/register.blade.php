@extends('layouts.master')

@section('content')

<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="bglogin">
					<div class="panel-heading">
						<h3 class="panel-title" id="lititle" align="center">Register</h3>
					</div>
				</div>

				<div class="panel-body">
					<form action="/register" method="POST" enctype="multipart/form-data">

						 @if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach($errors->all() as $error)
										<li>{{  $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						{{ csrf_field() }}

						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope-square"></i></span>
									<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" name="first_name" class="form-control" placeholder="First Name" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" name="password" class="form-control" placeholder="Password" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" name="password_confirmation" class="form-control" placeholder="Password Conformation" required>
								</div>				
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-bank"></i></span>
									<input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
									<input type="text" name="company_address" class="form-control" placeholder="Company Address" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
									<input type="text" name="company_registration_no" class="form-control" placeholder="Company Registration No." required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
									<input type="text" name="contact" class="form-control" placeholder="Contact Number" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-image"></i></span>
									<!-- <input type="file" name="logo" class="form-control"> --> 
									{{--<input type="text" name="logo" class="form-control" placeholder="Logo"> --}}
									<input class="form-control" name="image" type="file" accept="image/">
								</div>				
							</div>
						</div>

						<div class="form-group">
								<input type="submit" value="Register" class="btn btn-primary pull-right">				
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
	