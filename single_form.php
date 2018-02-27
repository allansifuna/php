<!DOCTYPE html>
<html>
<head>
	<title>Single page processing</title>
	<form action="single_form.php" method="post">
		<p>Username:<input type="text" name="user" placeholder="Name" required></p>
		<p>Password:<input type="password" name="pass" placeholder="Password" required></p>
		<input type="submit" name="login" value="login" required>
		<!-- process user input -->
		<?php
			//check if submit button has been clicked
		if (isset($_POST['login'])) {
			$username=$_POST['user'];
			$password=$_POST['pass'];
				if ($username=="user"&& $password=="secret") {
					header("location:admin.php");
				}else{echo "Wrong username or password";}
		}
			

		 ?>
	</form>
</head>
<body>

</body>
</html>