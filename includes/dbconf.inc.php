
<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'image_gallery';


try {

	$conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
	
} catch (Exception $e) {

	echo 'Oops We have a problem'.$e->getMessage();
	
}



 ?>