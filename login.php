<?php
$pageTitle = "Image Gallery Login";

include('views/header.php');

include('views/menu.php');

 ?>
  	
    <div class="container">

    	<div class="col-md-4 col-md-offset-4">

    		<form method="POST" action="includes/log_very.inc.php">

			  <div class="form-group">
			    <label for="name">Login</label>
			    <input type="text" class="form-control" name="uid"  placeholder="Login" minlength="3" maxlength="20">
			  </div>

			  <div class="form-group">
			    <label for="password">Hasło</label>
			    <input type="password" class="form-control" name="password" placeholder="Hasło" minlength="8" maxlength="20">
			  </div>

			  
			  <input type="submit" value="Zaloguj się" name="submit" class="btn btn-default">

		</form>

    	</div>    	

    </div><!-- end of container-->

<?php 

include('views/footer.php');
 ?>   
