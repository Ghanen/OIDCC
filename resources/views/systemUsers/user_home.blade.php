@extends('systemUsers.users_layouts.userNav')

@section('content')

<div class="jumbotron">
	<div class="container text-center">
		<h1>ID Card Creation</h1>
		<p>This is the online system to make the identity or visiting card. The users of this system must be assigned to
		the company.</p>
	</div>
</div>

<div class="container-fluid bg-3 text-center">
	<h3>Templates</h3><br>
	<div class="row">
			<a href="/templates"><div class="col-sm-3 col-md-offset-1 btn btn-primary" style="width:300px; height:200px;">

			<p>Template</p>
		</div></a>
			<a href="/templates2"><div class="col-sm-3 col-md-offset-1 btn btn-success" style="width:300px; height:200px;">
			<p>Template1</p>
		</div>
			<a href="/templates3"><div class="col-sm-3 col-md-offset-1 btn btn-danger" style="width:300px; height:200px;">
				<p>Template3</p>
		</div>
	</div>
</div><br>

</div><br>

@endsection
