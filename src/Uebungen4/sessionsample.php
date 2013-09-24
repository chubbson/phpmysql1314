<?php
// Starting the session

	if($_GET['action']=='deletesession')
	{
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}
		session_destroy();
	}
	else
	{
		session_start(); 
	}
	
	echo '<h1>Session sample</h1>';

	echo '<form method="get" action="sessionsample.php">';
	echo '<br>Name: <input type="text" name="name" optional placeholder="name">';
	echo '<br>Alter: <input type="text" name="age" optional placeholder="alter">';
	echo '<br><input type="submit" value="Send">';
	echo '</form>';

	$_SESSION[$_GET["name"]] = $_GET["age"];
	echo '<table border ="0">';
	
	foreach($_SESSION as $name => $alter)
	{
		print "<tr><td>";
		echo $name;
		print "</td><td>";
		echo $alter;
		print "</td></tr>";
	}	
	print "</table>";

	echo '<a href="sessionsample.php?action=deletesession">Personen-Liste leeren</a>';

?>	