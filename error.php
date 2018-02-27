<!DOCTYPE html>
<html>
<head>
	<title>Basic error handling and form validation</title>
</head>
<body>
	<?php 
		/*if (!file_exists("file.pdf")){
			die("sorry the file does not exist")}
			
		else{fopen("file.pdf", "r")};*/
		/*if (!file_exists("file.pdf")) {
			die("sorry the file does not exist")
		}else{fopen("file.pdf", "r")};*/
	 ?>
	 <?php 
	 	$value="sd";
	 	if (!isset($value) || empty($value)){
	 		echo "validation failed";
	 	}
	 	$password="yesyes";
	 	$min=7;
	 	if(strlen($password)<$min){
	 		echo "<h3>validation failed password must be more than seven characters</h3>";
	 		
	 	}
	 	$password="yesyesyes$password=yesyesyes;";
	 	$max=10;
	 	if(strlen($password)>$max){
	 		echo "<h3>validation failed password must be less than seven characters</h3>";
	 	}
	 	$value=1;
	 	if (!is_string($value)) {
	 		echo "<h3>validation failed value must be of type text</h3>";
	 	}
	 	$myarray=array("freddie","gabbys","allan" );
	 	$present="gabby";
	 	if (in_array($present,$myarray)) {
	 		echo "value not found";
	 	}
	  ?>
</body>
</html>