<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jumbotron-narrow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin.css') }}">
</head>
<body>
	@include('admin.admin_layouts.header')

	<!-- <div class="container"> -->
	<div class="jumbotron container">
		<a href="{{ route('users.edit', Sentinel::getUser()->id)}}" class="btn btn-primary pull-right">Admin Profile</a>
		<h2>List Of Users</h2>
		<hr>
		<div class="table-responsive">

			<table class="table">
				<thead>
				    <tr>
				      	<th>User_ID</th>
				      	<th>Email</th>
				      	<th>First Name</th>
				      	<th>Last name</th>
				      	<th>Company Name</th>
				      	<th>Company Address</th>
				      	<th>Company Registration No.</th>
				      	<th>Contact</th>
				      	<th>CLogo</th>
				      	<th>Edit</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>

				    		@foreach ($User as $no => $users)
				    		<tr>
				    		<td>{{ $no + 1 }}</td>
				    		<td>{{ $users->email }}</td>
				    		<td>{{ $users->first_name }}</td>
				    		<td>{{ $users->last_name }}</td>
				    		<td>{{ $users->company_name }}</td>
				    		<td>{{ $users->company_address }}</td>
				    		<td>{{ $users->company_registration_no }}</td>
				    		<td>{{ $users->contact }}</td>
				    		<td>{{ $users->logo }}</td>
							<td>
								<form method="POST" action="{{ route('users.destroy', $users->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="_method" value="DELETE" />
									<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" name="name" value="delete"></input>
									{{--<a href="{{ route('users.edit', $users->id)}}" class="btn btn-primary">Edit</a>--}}
									{{--<button type="submit" class="btn btn-danger">--}}
										{{--Delete--}}
									{{--</button>--}}
								</form>

							</td>
				    	@endforeach
				    </tr>
				</tbody>
			</table>				
		</div>
	</div>
	<!-- </div> -->

</body>
</html>

 	