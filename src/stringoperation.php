<!DOCTYPE html>

<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/resetStyle.css">
		<link rel="stylesheet" type="text/css" href="css/fancyStyle.css">
		<title data-i18n>Credits</title>
		<meta charset="utf-8">		
		<!--<link rel="stylesheet" type="text/css" href="resetStyle.css">-->
	</head>
	<body>
	<h1>asdfadsf</h1>
		<?php 
		/*
			ini_set('display_errors', 1);
			print '<br />';
			print 'Der Wert 1 ist: '.$i;
			print '<br />';
			$i = 10/0;
			print '<br />';
			error_repoting();
			print '<br />';
			error_reporting();
			*/
			
		?>
		<br />
		<?php
			
			$petersais = "Perter sagt: 'Meine 12341.25 griechische Drachmen sind 511 Euro wert.'";
			
			$drachme = 12345.23;
			$kurs = 340.75;
			$dwae = "Darachme";
			$ewae = "Euro";
			$euro = $drachme / $kurs;
			
			print '<br />Perter sagt: \'Meine 12341.25 griechische Drachmen sind 234 Euro wert.\' ';
			print '<br />Perter sagt: \'Meine $drachme griechische $dwae sind $euro $ewae wert.\' ';
			print "<br />Perter sagt: 'Meine $drachme griechische $dwae sind $euro $ewae wert.\' ";
			print '<br />Perter sagt: \'Meine '.$drachme.' griechische '.$dwae.' sind '.$euro.' '.$ewae.' wert.\' ';
			
		?>
	</body>
</html>