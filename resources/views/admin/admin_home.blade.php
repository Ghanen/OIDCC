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
				    	<?php
				    		foreach ($users as $users) { ?>
				    		<tr>
				    		<td><?php echo $users->id ?></td>
				    		<td><?php echo $users->email ?></td>
				    		<td><?php echo $users->first_name ?></td>
				    		<td><?php echo $users->last_name ?></td>
				    		<td><?php echo $users->company_name ?></td>
				    		<td><?php echo $users->company_address ?></td>
				    		<td><?php echo $users->company_registration_no ?></td>
				    		<td><?php echo $users->contact ?></td>
				    		<td><?php echo $users->logo ?></td>
							<td>
								<br>
								<form method="POST" action="{{ route('users.destroy', $users->id) }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="_method" value="DELETE" />
									<a href="{{ route('users.edit', $users->id)}}" class="btn btn-primary">Edit</a>
									<input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" name="name" value="delete"></input>
									{{--<button type="submit" class="btn btn-danger">--}}
										{{--Delete--}}
									{{--</button>--}}
								</form>
															
							</td>
				    	<?php	}
				    	?>
				    </tr>
				</tbody>
			</table>				
		</div>
	</div>
	<!-- </div> -->

</body>
</html>

 	