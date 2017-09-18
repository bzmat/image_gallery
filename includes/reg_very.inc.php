<?php 

if (isset($_POST['submit'])) {

	$uid = $_POST['uid'];

	$password = $_POST[password];

	$email = $_POST['email'];

	$reg = $_POST['regulations'];

	//empty fields
		if (!empty($uid) && !empty($password) && !empty($email) && !empty($reg) ) {


			
		}else{

			$error_field = "Proszę uzupłnić wszytskie pola";
			
			header("Location: ../register.php");


		}
	
}

	
	

?>