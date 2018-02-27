<!DOCTYPE html>
<html>
<head>
	<title>ethod get form processing </title>
</head>
<body>
	<h2>Method get from form processing</h2>
	<?php 
		//method get an array of key=>value pairs with the key being the name of the form input 
		//method get is treated as super global $_GET
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	echo "<br>";
	echo "My name is  ".$_POST['name'].", my email is ".$_POST['Email']." and i am taking ".$_POST['course']. " course";
	echo "<br>";
	 ?>
</body>
</html>