<!DOCTYPE html>
<html>
<head>
	<title>Random quote generator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1 class="text-success">Generate a Random Inspirational quote every time the browser window is reloaded</h1>
	<?php 
		$quotes=[
			["author"=>"Allan","motivatonal"=>"Every one has a plan util they get punched in the mouth"],
			["author"=>"Ephra","motivatonal"=>"Always do what you are afraid to do"],
			["author"=>"Freddy","motivatonal"=>"siishi mtakavyo ,naishi nitakavo"],
			["author"=>"Ken","motivatonal"=>"Dont let perfection become procrastination.DO IT"],
			["author"=>"Lebu","motivatonal"=>"If you have a big butt,you are sitting on a gold-mine"],
		];
		$images=[
			["image"=>"img/str.jpg"],
			["image"=>"img/oli-dale-139166.jpg"],
			["image"=>"img/tisa.jpg"],
			["image"=>"img/wexor-tmg-26886.jpg"],
			["image"=>"img/liquid-sky-1195548.jpg"],
			["image"=>"img/shazmyn-ali-228475.jpg"],
			["image"=>"img/504110140.jpg"],
			["image"=>"img/lance-anderson-395983.jpg"],
		];
		/*echo "<pre>";
		print_r($quotes);
		echo "</pre>";*/
		/*$random=rand(20,50);
		echo "$random";*/
		$quote=$quotes[rand(0,(count($quotes)-1))];
		
		$image=$images[rand(0,(count($images)-1))];
		$quoteAuthor= $quote['author'];
		$quoteText= $quote['motivatonal'];
		$bg=$image['image'];
		/*print_r($bg);*/
		/*echo $quoteAuthor .": ". $quoteText;*/
				
	 ?>
	 <blockquote class="text-center">
	 	<?php echo "<body style='background-image:url($bg); background-size:cover'"; ?>
	 	<?php echo "<h3> &quot" .$quoteText."&quot; </h3>" ?>
	 	<?php echo "<br>"; ?>
	 	<?php echo "<i>" .$quoteAuthor."</i>" ?>
	 	<?php echo "</body>"; ?>
	 </blockquote>
</body>
</html>