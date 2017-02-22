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
		<div class="">

			<table class="table">
				<thead>
				    <tr>
				      	<th>User_ID</th>
				      	<th>First Name</th>
				      	<th>Last Name</th>
				      	<th>Email</th>
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
								<a href="#" class="btn btn-danger">Delete</a>
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

 	