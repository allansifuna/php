<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="work.php" method="post">
		<p>Name:<input type="text" name="name" placeholder="Enter your name" required></p>
		
		<label for="counties">Select your town</label>
		<select name="county" id="counties" required>
			<option></option>
			<option value="Nairobi">Nairobi</option>
			<option value="Kiambu">Kiambu</option>
			<option value="Mombasa">Mombasa</option>
			<option value="Nyeri">Nyeri</option>
			<option value="Bungoma">Bungoma</option>
			<option value="Uasin gishu">Uasin gishu</option>
		</select>
		<br>
		<label for="counties">Select your weather condition</label>
		<select name="weather" id="counties" required>
			<option></option>
			<option value="rainny">Rainny</option>
			<option value="sunny">sunny</option>
			<option value="windy">windy</option>
			<option value="calm">calm</option>
		</select>
		<br>
		<label for="counties">Select your month</label>
		<select name="month" id="counties" required>
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
		<br>
		<input type="submit" name="submit" value="submit">	
		<?php 
			if (isset($_POST['submit'])) {
			 	$name=$_POST['name'];
			 	$county=$_POST['county'];
			 	$weather=$_POST['weather'];
			 	$month=$_POST['month'];
			 	echo "<br>";
			 	echo $_POST['name']." who lives in ".$_POST['county']." Experienced ".$_POST['weather']." in ".$_POST['month'];
			 } 
			 
		 ?>
	</form>
	<?php 
		$months=[
			 	"January"=>31,
				"February"=>"28 for normal and 29 for leap year",
				"March"=>31,
				"April"=>30,
				"May"=>31,
				"june"=>30,
				"July"=>31,
				"August"=>31,
				"September"=>30,
				"October"=>31,
				"November"=>30,
				"December"=>31
			 	

		];
		function month(){
			foreach ($months as $month=>$days ) {
				echo $_POST['name']." the month of " .$month. " has ".$days. " days" ;
			}
		}
		 ?>
		
	<form action="work.php" method="post">
		<p>Name:<input type="text" name="name" placeholder="Enter your name" required></p>

		<label for="counties">Select your month</label>
		<select id="counties" name="months" required>
			<?php option($months) ?>
		</select>
		<br>
		<input type="submit" name="button" value="submit">	
		<?php 
			if (isset($_POST['submit'])) {
			 	month();
			 } 
		 ?>
	</form>
	
</body>
</html>