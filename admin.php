<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		.jumbotron{
			width:60%;
			margin:auto;
			margin-top: 100px;
			background-image: url(img/sky.jpg);
			background-size: cover;
		}
		.page-header{
			margin:0;
			width:100%;
			border-bottom:1px solid grey;
			}
		body{
			background-image:url(img/sky.jpg);
			background-size: cover;
		}
		.btn{
			margin: 2px;
		}
		.panel{
			width:60%;
			margin:auto;
			margin-top: 100px;
			background-image: url(img/sky.jpg);
			background-size: cover;
			height: 400px;
		}
		form{
			
			padding-left: 150px;
		}
		.panel-heading{
			font-size: 2em;
			text-align: center;
			background-color: green;

		}
		tr{
			border:solid black 1px;
			border-radius: 50%;
			height: 100px;
			width: 100px;
		}
		.img-circle{
			width: 100px;
			height: 100px;
			margin-left: 200px;
			margin-bottom: 10px;
		}
		.panel-default {
  			border-color: #ddd;
		}
		.panel-default > .panel-heading {
 			color: #333;
 			background-color:green;
		     border-color: green;
		     border-top-right-radius: 12px;
		     border-top-left-radius: 12px;
		}
		.panel{
			background-image:url(img/sky.jpg);
			background-size: cover;
		     border-image:url(img/sky.jpg); 
		     border-top-right-radius: 12px;
		     border-top-left-radius: 12px;
		 }
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
    <div class="panel-heading">SIGN IN</div>
    <div class="panel-body">
    	 <img src="img/th.jpeg" class="img-circle text-center" alt="Cinque Terre"> 
    	<form>
			<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input id="email" type="text"  name="email" placeholder="Username or Email">
    		</div>
   			 <br>
    		<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input id="password" type="password"  name="password" placeholder="Password">
    		</div>
    		<br>
  			<button type="submit" class="btn btn-success">log in</button><button type="submit" class="btn btn-primary">log in with facebook</button>
  			<div class="input-group">
      			
      			<input  type="checkbox" >Remember me
		</form>
	</div>
  </div>
		<!-- <div class="jumbotron">
			<div class="alert alert-info">
    <strong>SIGN IN</strong>
  </div>
		<form>
			<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      			<input id="email" type="text"  name="email" placeholder="Username or Email">
    		</div>
   			 <br>
    		<div class="input-group">
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input id="password" type="password"  name="password" placeholder="Password">
    		</div>
    		<br>
  			<button type="submit" class="btn btn-success">log in</button><button type="submit" class="btn btn-primary">log in with facebook</button>
  			<div class="input-group">
      			
      			<input  type="checkbox" >Remember me
		</form>
		
	</div> -->
	</div>
	
	

</body>
</html>