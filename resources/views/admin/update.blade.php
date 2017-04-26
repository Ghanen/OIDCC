<!DOCTYPE html>
<html>
<head>
	<title>User Update</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/user.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jumbotron-narrow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css') }}">
</head>
<body>
	@include('admin.admin_layouts.header')
	<div class="jumbotron container">
		<div class="container-fluid">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7">
							<div class="card">
								<div class="header">
									<h3 class="title" style="color: orangered;">Edit Profile</h3>
								</div>
								<div class="content" style="margin-top:30px;">
									<form action="{{ route('users.update', Sentinel::getUser()->id)}}" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="_method" value="PATCH">
										{{ csrf_field() }}

										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user"></i></span>
													<input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{Sentinel::getUser()->first_name}}" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user"></i></span>
													<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ Sentinel::getUser()->last_name }}" required>
												</div>
											</div>
										</div>

										<div class="row" style="margin-top:30px;">
											<div class="col-md-6">
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-envelope-square"></i></span>
														<input type="email" name="email" class="form-control" placeholder="example@example.com" value="{{ Sentinel::getUser()->email }}" required>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
													<input type="text" name="company_address" class="form-control" placeholder="Company Address" value="{{ Sentinel::getUser()->company_address }}" required>
												</div>
											</div>
										</div>

										<div class="row" style="margin-top:20px;">
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-bank"></i></span>
													<input type="text" name="company_name" class="form-control" placeholder="Company Name" value="{{ Sentinel::getUser()->company_name }}" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
													<input type="text" name="company_registration_no" class="form-control" placeholder="Company Registration No." value="{{ Sentinel::getUser()->company_registration_no }}" required>
												</div>
											</div>

										</div>

										<div class="row" style="margin-top:30px;">
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
													<input type="number" name="contact" class="form-control" placeholder="Contact Number" value="{{ Sentinel::getUser()->contact }}" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-image"></i></span>
													<input class="form-control" name="image" type="file" accept="image/" value="{{ Sentinel::getUser()->logo }}">
												</div>
											</div>
										</div>



										<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="card card-user">
								<div class="image" style="text-align: center;">

									<img style="border-radius: 50%;" src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}" alt="..." height="200px" width="200px"/>
								</div><br>


								<div class="table-responsive">
									<table class="table">
										<tr height="40">
											<td width="28%" align="right">Name</td>
											<td width="02%" align="center">:</td>
											<td>@if(Sentinel::check())
													{{ Sentinel::getUser()->first_name }}
												@endif</td>
										</tr>
										<tr height="40">
											<td width="28%" align="right">Company</td>
											<td width="02%" align="center">:</td>
											<td>@if(Sentinel::check())
													{{ Sentinel::getUser()->company_name }}
												@endif</td>
										</tr>
										<tr height="40">
											<td width="28%" align="right">Company Address</td>
											<td width="02%" align="center">:</td>
											<td>@if(Sentinel::check())
													{{ Sentinel::getUser()->company_address }}
												@endif</td>
										</tr>
										<tr height="40">
											<td width="28%" align="right">Company Reg. No.</td>
											<td width="02%" align="center">:</td>
											<td>@if(Sentinel::check())
													{{ Sentinel::getUser()->company_registration_no }}
												@endif</td>
										</tr>
										<tr height="40">
											<td width="28%" align="right">Email</td>
											<td width="02%" align="center">:</td>
											<td>@if(Sentinel::check())
													{{ Sentinel::getUser()->email }}
												@endif</td>
										</tr>
										<tr height="40">
											<td width="28%" align="right">Contact</td>
											<td width="02%" align="center">:</td>
											<td>@if(Sentinel::check())
													{{ Sentinel::getUser()->contact }}
												@endif</td>
										</tr>
									</table>
								</div>
								<hr>

							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>