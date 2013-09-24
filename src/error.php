<?php

		echo '<h1>asdfadsf</h1>';
		ini_set('display_errors', 1);
		print '<br />';
		print 'Der Wert 1 ist: '.$i;
		print '<br />';
		$i = 10/0;
		print '<br />';
		error_repoting();
		print '<br />';
		error_reporting();

?>