<!DOCTYPE html>
<html>
<head>
	<title>User Update</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jumbotron-narrow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css') }}">
</head>
<body>
	@include('admin.admin_layouts.header')

	<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="bgupdate">
					<div class="panel-heading">
						<h3 class="panel-title" id="lititle" align="center">Update</h3>
					</div>
				</div>

				<div class="panel-body">
					<form action="{{ route('users.update', $users->id) }}" method="POST">
						<input type="hidden" name="_method" value="PATCH">
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
									<input type="email" name="email" class="form-control" placeholder="example@example.com" value="{{ $users->email }}" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $users->first_name }}" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $users->last_name }}" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-bank"></i></span>
									<input type="text" name="company_name" class="form-control" placeholder="Company Name" value="{{ $users->company_name }}" required>
								</div>				
							</div>
							
						</div>

						<div class="col-md-6">
							
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
									<input type="text" name="company_address" class="form-control" placeholder="Company Address" value="{{ $users->company_address }}" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
									<input type="text" name="company_registration_no" class="form-control" placeholder="Company Registration No." value="{{ $users->company_registration_no }}" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
									<input type="text" name="contact" class="form-control" placeholder="Contact Number" value="{{ $users->contact }}" required>
								</div>				
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-image"></i></span>
									<!-- <input type="file" name="logo" class="form-control"> --> 
									<input type="text" name="logo" class="form-control" placeholder="Logo" value="{{ $users->logo }}">
								</div>				
							</div>
						</div>

						<div class="form-group">
								<input type="submit" value="Update" class="btn btn-primary pull-right">				
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>