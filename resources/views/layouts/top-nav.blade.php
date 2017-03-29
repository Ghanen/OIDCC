<div>   <!-- class="header clearfix"> -->
    <nav class="">
        <ul class="nav nav-pills pull-right">

        	<!-- @if (Sentinel::check())
        		<li role="presentation">
        		<form action="/logout" method="POST" id="logout-form">
        			{{  csrf_field() }}
        			<a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
        		</form>
        	   </li>

        	@else -->
        	<li role="presentation"><a href="/login" class="relog">Login</a></li>
        	<li role="presentation"><a href="/register" class="relog">Register</a></li>

        	<!-- @endif   -->	
        </ul>
        	<h3 >
    		<!-- @if(Sentinel::check())
    			Hello! {{ Sentinel::getUser()->first_name }}
    		@else -->
            <a href="/login"><img src="{{URL::asset('/images/logo.png')}}" height="50" width="60"></a>
    		<a href="/login" class="logotitle">Card Creator</a>
    		<!-- @endif -->
    	</h3>
    </nav>
    <hr>
</div>
