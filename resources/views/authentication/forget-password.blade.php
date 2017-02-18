@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="bglogin">
					<div class="panel-heading">
						<h3 class="panel-title" id="lititle" align="center">Forgot Password</h3>
					</div>
				</div>

				<div class="panel-body">
					<form action="/forget-password" method="POST">
						{{ csrf_field() }}

						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}	
							</div>
						@endif
						
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="example@example.com" required>
							</div>				
						</div>

						<div class="form-group">
								<input type="submit" value="Send code" class="btn btn-primary pull-right">				
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
