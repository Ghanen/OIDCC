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
				      	<th>Company Logo</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				      	<th scope="row">1</th>
				      	<td>Mark</td>
				      	<td>Otto</td>
				      	<td>@mdo</td>
				      	<td>Mark</td>
				      	<td>Otto</td>
				      	<td>@mdo</td>
				      	<td>Mark</td>
				      	<td>Otto</td>
				    </tr>
				    <tr>
				      	<th scope="row">2</th>
				      	<td>Mark</td>
				      	<td>Otto</td>
				      	<td>@mdo</td>
				      	<td>Mark</td>
				      	<td>Otto</td>
				      	<td>@mdo</td>
				      	<td>Mark</td>
				      	<td>Otto</td>
				    </tr>
				    <tr>
				      	<th scope="row">3</th>
				      	<td>Mark</td>
				      	<td>Otto</td>
				      	<td>@mdo</td>
				      	<td>Mark</td>
				      	<td>Otto</td>
				      	<td>@mdo</td>
				      	<td>Mark</td>
				      	<td>Otto</td>
				    </tr>

				</tbody>
			</table>				
		</div>
	</div>
	<!-- </div> -->

</body>
</html>

 	