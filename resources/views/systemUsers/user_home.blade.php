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
		<div class="col-md-4">
			<a href="/templates">
				<img src="{{URL::asset('/images/Templates/Blue ID Card.png')}}">
			</a>
		</div>
		<div class="col-md-4">
			<a href="/templates2">
				<img src="{{URL::asset('/images/Templates/Green ID Card.png')}}">
			</a>
		</div>
		<div class="col-md-4">
			<a href="/templates3">
				<img src="{{URL::asset('/images/Templates/RED ID Card.png')}}">
			</a>
		</div>
	</div>
	</div>
</div><br>

</div><br>

@endsection
