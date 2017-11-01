<div class="row" style="background-color:#202020;">
		<div class="col-sm-12" >

<nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/touristguide/" class="current">Home</a></li>
		<li><a href="http://localhost/touristguide/find-places.php">Find Places</a></li>
		<li><a href="http://localhost/touristguide/find-agencies.php">Find Tourist agencies</a></li>
		<li><a href="http://localhost/touristguide/all-places.php">all Places</a></li>
		<li><a href="http://localhost/touristguide/add-place.php">Add New Place</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<?php
					
		if(!isset($_SESSION['member']['stat']))
		{
			echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>'; 
			echo '<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
		}
		else
		{
			echo '<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
		}
			
		?>
      </ul>
</nav>
	</div>
</div> 
