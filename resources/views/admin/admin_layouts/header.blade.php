<div class="well container">
	<!-- <nav class="navbar navbar-default">
		<div class="container-fluid"> -->
			<ul class="nav navbar-nav pull-right">
	    		<div class="dropdown">
				  	<button class="dropbtn">
				  	@if(Sentinel::check())
				  		<i class="fa fa-user"></i>
						{{ Sentinel::getUser()->first_name }}
					@endif
					</button>
				  	<div class="dropdown-content">
						<form action="/logout" method="POST" id="logout-form">
							{{  csrf_field() }}
							<a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
						</form> 
					</div> 
				</div>  
	    	</ul>
				
		    <div class="navbar-header">
		      	<div class="text-muted">
				   <h2 class="iconid"> Identity Card Creator </h2>
				</div>
	    	</div>
	    	
  		<!-- </div>
	</nav> -->
</div>