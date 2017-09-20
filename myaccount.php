<?php 

session_start();

$pageTitle = "My account";

include('views/header.php');
include('views/menu.php');


 ?>

 <div class="container">
	
    		

    	<div class="row">
    		
    	
				<div class=" col-md-4 col-md-offset-2">

	    			<div class="thumbnail">

	    			<a class="fancybox" rel="group" href="img/1.jpg"><img class="min" src="img/1.jpg" alt=""></a>
	    												
	    			</div><!--thumbnail-->
	    			<p class="caption">Name</p>
					<p class="caption">Uploded on:</p>
				
    			</div><!-- col -->

    			<div class="col-md-2 col-md-offset-2">

    				<div class="edit">
    					
    					<div class="btn btn-primary btn-block">Edytuj</div>

    					<div class="btn btn-danger btn-block">Usuń</div>


    				</div>
    			
    				
    			</div>
    								 			
    		

    	</div><!-- row -->

    	
    		
    		
    		

    	<div class="row">
    		
    	
				<div class=" col-md-4 col-md-offset-2">

	    			<div class="thumbnail">

	    			<a class="fancybox" rel="group" href="img/2.jpg"><img class="min" src="img/2.jpg" alt=""></a>
	    												
	    			</div><!--thumbnail-->
	    			<p class="caption">Name</p>
					<p class="caption">Uploded on:</p>
				
    			</div><!-- col -->

    			<div class="col-md-2 col-md-offset-2">

    				<div class="edit">
    					
    					<div class="btn btn-primary btn-block">Edytuj</div>

    					<div class="btn btn-danger btn-block">Usuń</div>


    				</div>
    			
    				
    			</div>
    		

    	</div><!-- row -->	

    	<div class="row">
    		
    	
				<div class=" col-md-4">

	    			<div class="thumbnail">

	    			<a class="fancybox" rel="group" href="img/2.jpg"><img class="min" src="img/2.jpg" alt=""></a>
	    												
	    			</div><!--thumbnail-->
	    			<p class="caption">Name</p>
					<p class="caption">Uploded on:</p>
				
    			</div><!-- col -->
    		

    	</div><!-- row -->	
   	

    </div><!-- end of container-->

<?php 
include('views/footer.php');
 ?>