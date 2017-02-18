@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="bglogin">
					<div class="panel-heading">
						<h3 class="panel-title" id="lititle" align="center">Reset Password</h3>
					</div>
				</div>

				<div class="panel-body">
					<form action="" method="POST">
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
						
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>				
						</div>

						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
							</div>				
						</div>

						<div class="form-group">
								<input type="submit" value="Update password" class="btn btn-primary pull-right">				
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

@endsection
