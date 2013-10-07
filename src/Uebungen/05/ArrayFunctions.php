<?php

include 'src/header.php';

DrawHeaderAndFooter::drawHeader();

$multiCity = array(
    array('City', 'Country', 'Continent'),
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
);

$header = array_shift($multiCity);

function DrawTable($arrHeaderRow, $arrOfArr, $drawBorder = 1)
{

	echo "<table border='$drawBorder'>";
	foreach ($arrHeaderRow as $key => $hval) {
		echo "<th>$hval</th>";
	}
	foreach ($arrOfArr as $row) {
		echo "<tr>";
		foreach ($row as $cell) {
			echo "<td>".$cell."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

}

echo "<h1>Auflisten der Städte in Asien</h1>";

$filtered = array_filter($multiCity, function($el) { return $el[2] == "Asia"; });
//print_r ( $filtered );
DrawTable($header, $filtered);

echo "<hr/>";
echo "<h1>Auflisten der Kontinente, sowie die Zahl der Länder darin (im Array)</h1>";

$ctyPerContHead = array('Continent', 'City count');

foreach ($multiCity as $mcrow) {
	$rowCont = $mcrow[2];
	$ctyPerCont[$rowCont] += 1;
}
echo "<pre>";
print_r($ctyPerCont);


echo "<hr/>";
echo "<h1>Auflisten der Länder A-Z</h1>";

foreach ($multiCity as $nr => $inhalt)
{
    $cty[$nr]  = strtolower( $inhalt[0] );
    $ctry[$nr]   = strtolower( $inhalt[1] );
    $cont[$nr] = strtolower( $inhalt[2] );
}

array_multisort($ctry, SORT_ASC, $multiCity);
 
DrawTable($header, $multiCity);

DrawHeaderAndFooter::drawFooter();

?>