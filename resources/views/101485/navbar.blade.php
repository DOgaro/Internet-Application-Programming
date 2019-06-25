
<nav class="navbar navbar-default">
	  	<div class="container-fluid">
	    
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	      		</button>
	      		
	    	</div>
 
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	 <ul class="nav navbar-nav navbar-left">
        <li> <a style="text-decoration: none; font-size: 18px;" href="{{ url('/') }}">HOME</a></li>
       <li> <a style="text-decoration: none; font-size: 18px;" href="{{ route('student') }}">REGISTER</a></li>
        <li> <a style="text-decoration: none; font-size: 18px;" href="{{ route('fees') }}">FEES-PAYMENT</a></li>
        <li> <a style="text-decoration: none; font-size: 18px;" href="{{ route('paid') }}">TRANSACTIONS</a></li>
		      
		    </div>
	  </div>
	</nav>