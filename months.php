<!DOCTYPE html>
<html>
<head>
	<title>Months</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>
<body>
	<?php 
		$year;
		$year =$_POST["year"];
		$feb;
		if ($year % 4 == 0) {
			$feb = 29;
		}
		else{
			$feb = 28;
		}
		
		$months = [
			""=>"Select a month please",
			"January" => 31,
			"February" => $feb,
			"March" => 31,
			"April" => 30,
			"May" => 31,
			"June" => 30,
			"July" => 31,
			"August" => 31,
			"September" => 30,
			"October" => 31,
			"November" => 30,
			"December" => 31
		];

		function option($monthsArray){
			foreach ($monthsArray as $month => $days) {
				$monthUpper = ucwords($month);
				echo "<option value='$month'>$monthUpper</option>";
				
			}
		}

	 ?>
	 <div class="container">
	 	<div class="jumbotron">
	 		<div class="form">
	 			<div class="text-center">
	 	<table >
	 	<h1><b>Select a month</b></h1>
	 		<tbody>
	 			<tr>
	 				<td>
	 					<form role="form" method="post" action="months.php">
	 						<div class="form-group">
	 							<input type="number" name="year" placeholder="enter year">
	 							<br/>
	 							<br/>

	 							<div class="input-group">
	 								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	 								<select name="month_dropdown" class="form-control" required>
	 									<!-- php to insert options from months array -->
	 									<?php
	 										option($months);
	 									?>
	 								</select>
	 							</div>
	 						</div>
	 						<input type="submit" name="submit" value="SUBMIT" class="btn btn-success">
	 					</form>
	 				</td>
	 			</tr>
	 		</tbody>
	 	</table>
	 	</div>
	 	<div class="jumbotron">
	 		<?php

	 	if (isset($_POST['submit'])) {
	 		if(strlen($_POST["year"])<>4 || ($_POST["year"])==0){
		echo "<div class='alert alert-danger'><h3>Enter a valid year!!</h3></div>";
		}else{	
	 		$monthSelected = $_POST['month_dropdown'];
	 		$day = $months[$monthSelected];
			$days=ucwords($day);
			$year =$_POST["year"];

	 		if ($monthSelected <>"February") {
	 			echo "<div class='alert alert-success'><h3>The month of $monthSelected has $days days</h3></div>";
	 		}

	 		else{
	 			if ($days == 29) {
	 				echo "<div class='alert alert-success'><h3>The month of $monthSelected has $days days because $year is a leap year</h3></div>";
	 			}

	 			else{
	 				echo "<div class='alert alert-success'><h3>The month of $monthSelected has $days days because $year is not a leap year</h3></div>";
	 			}
	 		}
	 		
	 	}
	 }
	 ?>
	 	</div>
	 		</div>
	 	

	 </div>
	 
	 

	 <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
	 <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	 	 </div>
</body>
</html>
