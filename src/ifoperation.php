<!DOCTYPE html>

<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/resetStyle.css">
		<link rel="stylesheet" type="text/css" href="css/fancyStyle.css">
		<title data-i18n>ifoperations</title>
		<meta charset="utf-8">		
		<!--<link rel="stylesheet" type="text/css" href="resetStyle.css">-->
	</head>
	<body>
	<h1>asdfadsf</h1>
		<?php
			ini_set('display_errors', 1);
		?>
		<br />
		<?php
			$gew = rand ( 0 , 61 );
			$kategorie = "XL";
			$maxgew = 60;
			$mingew = 0;
			
			$categories = array(
						   0 => "A",
			               1 => "B",
						   2 => "C",
						   "min" => "untergewicht",
						   "max" => "übergewicht");
			
			
			$cat = 
			$gew < $mingew 
				? $categories["min"] 
				: $gew > $maxgew 
					? $categories["max"]   
					: $categories[$gew/20];
			
		print "Das Gepaeckstueck wiegt $gew kg. es gehört zur Kategorie $cat";

		?>
	</body>
</html>