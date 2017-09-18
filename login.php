<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Gallery</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--my css-->
    <link rel="stylesheet" href="css/style.css">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	
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

			  <div class="checkbox">
			    <label>
			      <input type="checkbox"><a href="#">Akceptuję regulamin</a> 
			    </label>
			  </div>

			  <button type="submit" class="btn btn-default">Zapisz</button>

		</form>

    	</div>    	

    </div><!-- end of container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

	
  </body>
</html>

