<div class="well container">
	<!-- <nav class="navbar navbar-default"> -->
		<!-- <div class="container-fluid"> -->
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
				   <a href="/admin_home" style="text-decoration:none"><h2 class="iconid"> ID Creator </h2></a>
				</div>
	    	</div>
	    	
  		<!-- </div> -->
	<!-- </nav> -->
</div>