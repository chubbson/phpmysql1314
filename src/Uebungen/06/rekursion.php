<?php

$datas = array(
	array('id' => 5, 'parent' => 0, 'name' => 'rekursionen sind schon was tolles'),
    array('id' => 6, 'parent' => 5, 'name' => 'super sache'),
    array('id' => 7, 'parent' => 5, 'name' => 'sehr elegant'),
    array('id' => 8, 'parent' => 5, 'name' => 'aber auch rechenintensiv'),
    array('id' => 1, 'parent' => 0, 'name' => 'was haltet ihr von der vorlesung?'),
    array('id' => 2, 'parent' => 1, 'name' => 'naja..'),
    array('id' => 3, 'parent' => 1, 'name' => 'ist ja seine erste'),
    array('id' => 4, 'parent' => 1, 'name' => 'also ich finds super'),
   );



function rek($array, $currRow, $lvl)
{
	if($currRow == 0) 
	{
		var_dump($currRow);
		var_dump($lvl);

		$currRow = $array[0];
	}
	$id = $currRow['id'];
	$parent = $currRow['parent'];
	$name = $currRow['name'];

	foreach ($array as $actR) {
		if($actR['id'] == $parent)
		{
			echo str_pad("",$lvl,"-").$actR['name'];
			rek($array, $actR, $lvl);
		}
	}

}

rek($datas, 0, 0);

echo "test"; 
?>