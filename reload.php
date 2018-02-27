<!DOCTYPE html>
<html>
<head>
	<title>Random quote generator</title>
</head>
<body>
	<h1>Generate a Random Insrirational quote every time the browser window is reloaded</h1>
	<?php 
		$quotes=[
			["author"=>"Allan","motivatonal"=>"Every one has a plan util they get punched in the mouth"],
			["author"=>"Ephra","motivatonal"=>"Always do what you are afraid to do"],
			["author"=>"Freddy","motivatonal"=>"siishi mtakavyo ,naishi nitakavo"],
			["author"=>"Ken","motivatonal"=>"Dont let perfection become procrastinatio.DO IT"],
			["author"=>"Lebu","motivatonal"=>"If you have a big butt,you are sitting on a gold-mine"],
		];
		/*echo "<pre>";
		print_r($quotes);
		echo "</pre>";*/
		/*$random=rand(20,50);
		echo "$random";*/
		$quote=$quotes[rand(0,(count($quotes)-1))];
		/*print_r($quotes);*/
		
		$quoteAuthor= $quote['author'];
		$quoteText= $quote['motivatonal'];
		/*echo $quoteAuthor .": ". $quoteText;*/
				
	 ?>
	 <blockquote>
	 	<?php echo "<h3> &quot" .$quoteText."&quot; </h3>" ?>
	 	<?php echo "<i>" .$quoteAuthor."</i>" ?>
	 </blockquote>
</body>
</html>