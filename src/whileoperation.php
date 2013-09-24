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
	<ul>
		<li>Bei 1 beginnen zu zaehlern</li>
		<li>die Zahl mit sich selber addieren, bis 100 erreicht ist</li>
	</ul>
		<?php
			ini_set('display_errors', 1);
		?>
		<br />
		<?php
			$max = 100;
			$i = 1;
			
			print "<h1>Foreach</h1>";
			for($i = 1; $i<$max; $i=$i+$i)
			{
				print "<br> $i";
			}
			
			$i = 1; 
			
			print "<h1>while</h1>";
			while($i < $max)
			{
				print "<br> $i";
				$i=$i+$i;
			}
			
			print "<h1>Schriftgroessen</h1>";
			for($i = 30; $i>0; $i-=5)
			{
				print '<br /><font size="'.$i.'">Ziemlich riesiger Text: '.$i.'</font><br />';
				print '<span style="font-size:'.$i.'px">Ziemlich riesiger Text: '.$i.'</span>';
			}
			
			print "<h1>Foreach</h1>";
			print "<ul><li>Array mit Land -> hauptstat (3-4) erstellen</li>
			       <br><li>Array weiter befuellen mit zuesaetzlichen key->value pairs</li>
			       <br><li>mit foreach durchiterieren und key-> value pairs in table ausgeben</li></ul>";
			
			$arr = array("Land" => "Hauptstadt",
						 "Scheiz" => "Bern",
			             "Frankreich" => "Paris",
			             "Deutschland" => "Berlin",
			             "Scheiz" => "Bern");
			
			$arr["Italien"] = "Rom";
			$arr["Spanien"] = "Madrid";
			
			print '<table border ="1">';
			
			//print $arr
			
			foreach($arr as $key => $value)
			{
				print "<tr><td>";
				echo $key;
				print "</td><td>";
				echo $value;
				print "</td></tr>";
			
			}
			
			print "</table>";
			
			echo "<h1>Continue</h1>";
			echo "<ul><li>Mit for-schlaufe die zahl 5 teilen durch nennen</li>";
			echo "<li>init: -2</li>";
			echo "<li>ende: 2</li>";
			echo "<li>increment + 1</li>";
			echo "<li>ausgabe des bruchs, ohne bei div/0 zu breaken</li>";
			echo "</ul>"; 
			
			for($i = -2; $i < 3; $i++)
			{
				if($i === 0)
				{ echo "<br>Division by zero"; continue; }	
				$res = 5/$i;
				echo "<br>5 / $i = $res";
			}
			
			print "<h1>SwitchCase</h1>";
			echo "<ul><li>Notensystem (1-6) mit switch case</li>";
			echo '<li>"nicht bewertet" ist eein eigener case</li>';
			echo "<li>wenn keine ganze note ausgegeben wird, soll eine default-mmeldung erscheinen</li>";
			echo "</ul>"; 
			
			$note = rand(0,20)/2;
			
			echo "<br>$note";
			var_dump($note);
			switch($note)
			{
				case "1": print "Saftsack";
				break;
				case "2": print "Ungenuegen";
				break;
				case "3": print "Nicht bestanden";
				break;
				case "4": print "Bestanden";
				break;
				case "5": print "Bravo";
				break;
				case "6": print "Supi";
				break;
				//case is_float():
				//print "Its a float"; 
				default: 
				print "Test wurde nicht abgegeben";
				
			}
			
		?>
	</body>
</html>