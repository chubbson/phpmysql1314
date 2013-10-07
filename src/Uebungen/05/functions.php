<?php

/*
Funktion mit 3 parametern: anzahl, preis, waehrung
vordefiniert: oreis mit 45, waehrung mit CHF
erfolgen solll diese ausgabe der kostern 
kosten(7,2.99,"dollar");
kosten(10);
kosten(15,29);
--------------------
Reuslt: 
Koste; 279,93 Dollar.
Kosten: 450 CHF
Kosten: 435 CHF
*/

include 'src/header.php';

DrawHeaderAndFooter::drawHeader();

function kosten($cnt, $price=45, $currency="CHF")
{
	echo "Kosten: ".$cnt*$price." ".$currency."</br>"; 
}
 
?> 
<ul>
	<li>Funktion mit 3 parametern: anzahl, preis, waehrung</li>
	<li>vordefiniert: oreis mit 45, waehrung mit CHF</li>
	<li>erfolgen solll diese ausgabe der kostern </li>
</ul>

<div class='result'>
	Kosten(7,2.99,"dollar")</br>
	Kosten: 450 CHF</br>
	Kosten: 435 CHF</br>
</div>

<?php
echo "<hr/>";

kosten(7,2.99,"Dollar");
kosten(10);
kosten(15,29);

DrawHeaderAndFooter::drawFooter();

?>