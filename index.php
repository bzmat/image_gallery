<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Image Gallery</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--my css-->
    <link rel="stylesheet" href="css/style.css">

    <!--fancybox-->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" class="active" href="">Image Gallery</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="login.php">Log in</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    	
    	<div class="row">
    		
    		<div class=" col-md-2">

    			<div class="thumbnail">

    			<a class="fancybox" rel="group" href="img/1.jpg"><img class="min" src="img/1.jpg" alt=""></a>
    												
    			</div><!--thumbnail-->
    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->

    		<div class="col-lg- col-md-2">

    			<div class="thumbnail">
    				
					<a class="fancybox" rel="group" href="img/2.jpg"><img class="min" src="img/2.jpg" alt=""></a>
					
    			</div><!--thumbnail-->

    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->

    		<div class="col-lg-2 col-md-2">

    			<div class="thumbnail">
    				
					<a class="fancybox" rel="group" href="img/3.jpg"><img class="min" src="img/3.jpg" alt=""></a>
					
    			</div><!--thumbnail-->

    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->

    		<div class="col-lg-2 col-md-2">

    			<div class="thumbnail">
    				
					<a class="fancybox" rel="group" href="img/4.jpg"><img class="min" src="img/4.jpg" alt=""></a>
					
    			</div><!--thumbnail-->
    			
    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->

    		<div class="col-lg-2 col-md-2">

    			<div class="thumbnail">
    				
					<a class="fancybox" rel="group" href="img/5.jpg"><img class="min" src="img/5.jpg" alt=""></a>
				
    			</div><!--thumbnail-->
    			
    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->

    		<div class=" col-ld-2 col-md-2">

    			<div class="thumbnail">
    				
					<a class="fancybox" rel="group" href="img/6.jpg"><img class="min" src="img/6.jpg" alt=""></a>
					
    			</div><!--thumbnail-->
    			
    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->
    	</div><!--row-->

    	<div class="row">
    		
    		<div class=" col-ld-2 col-md-2">

    			<div class="thumbnail">
    				
					<a class="fancybox" rel="group" href="img/7.jpg"><img class="min" src="img/7.jpg" alt=""></a>
					
    			</div><!--thumbnail-->
    			
    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->

    		<div class=" col-ld-2 col-md-2">

    			<div class="thumbnail">
    				
					<a class="fancybox" rel="group" href="img/8.jpg"><img class="min" src="img/8.jpg" alt=""></a>
					
    			</div><!--thumbnail-->
    			
    			<p class="caption">Name</p>
				<p class="caption">Uploded on:</p>
				
    		</div><!-- col -->

    	</div><!-- row -->

    		

    	

    </div><!-- end of container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

	   <script type="text/javascript">
		$(document).ready(function() {
		$(".fancybox").fancybox();
			});
		</script>
  </body>
</html>

