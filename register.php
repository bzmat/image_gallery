<?php

session_start();

$pageTitle = "Immage Gallery Register";

include('views/header.php');

include('views/menu.php');
 ?>

  <div class="container">

    	<div class="col-md-4 col-md-offset-4">

    		<form method="POST" action="includes/reg_very.inc.php">

			  <div class="form-group">
			    <label for="name">Login </label>
			    <input type="text" class="form-control" name="uid"  placeholder="Login " minlength="3" maxlength="20">
			  </div>

			  <div class="form-group">
			    <label for="password">Hasło</label>
			    <input type="password" class="form-control" name="password" placeholder="Hasło" minlength="8" maxlength="20">
			  </div>

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" placeholder="Email" minlength="8" maxlength="20">
			  </div>

			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name="regulations" value="regulations"><a href="#">Akceptuję regulamin</a> 
			    </label>
			  </div>

			  <input type="submit" value="Zapisz" name="submit" class="btn btn-default"><br><br>

				<?php 

				if (isset($_SESSION["error_field"])) {
					
				}

					echo '<div class="alert alert-danger">'.$_SESSION["error_field"].'</div>';

				 ?>

				
				
		

		</form>



    	</div>    	

    </div><!-- end of container-->
<?php 

include('views/footer.php');
 ?>   