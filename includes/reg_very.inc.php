<?php 

session_start();

if (isset($_POST['submit'])) {

	$_SESSION['user'] = TRUE;

	header("Location: ../myaccount.php");


	
			


		
	
}

	
	

?>