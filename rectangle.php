<!DOCTYPE html>
<html>
<head>
	<title>Area</title>
</head>
<body>
	<form action="rectangle.php" method="post">
		<p>length:<input type="number" name="length" placeholder="Enter the length"></p>
		<p>width:<input type="number" name="width" placeholder="Enter the width"></p>
		<input type="submit" name="calculate" value="calculate">	
		<label for="counties">Select your town</label>
		<select name="county" id="counties">
			<option></option>
			<option value="Nairobi">Nairobi</option>
			<option value="Kiambu">Kiambu</option>
			<option value="Mombasa">Mombasa</option>
			<option value="Nyeri">Nyeri</option>
			<option value="Bungoma">Bungoma</option>
			<option value="Uasin gishu">Uasin gishu</option>
		</select>
		<label for="counties">Select your weather condition</label>
		<select name="county" id="counties">
			<option></option>
			<option value="rainny">Rainny</option>
			<option value="sunny">sunny</option>
			<option value="windy">windy</option>
			<option value="calm">calm</option>
		</select>
		<label for="counties">Select your month</label>
		<select name="county" id="counties">
			<option></option>
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="October">October</option>
			<option value="November">November</option>
			<option value="December">December</option>
		</select>
		
	</form>
	<?php
	function calculate($length,$width){
		$area=$length*$width;
		return $area;
	}
	if (isset($_POST['calculate'])) {
			$length=$_POST['length'];
			$width=$_POST['width'];
		echo "The area of a rectangle of length ".$length." and width " .$width." is ".calculate($length,$width);
	}
	echo "<br>";

		if (isset($_POST['calculate'])) {
			$length=$_POST['length'];
			$width=$_POST['width'];
			$Area=$length*$width;
			echo "The area of a rectangle of length ".$length." and width " .$width." is ".$Area ;
		 } 
	 ?>
</body>
</html>