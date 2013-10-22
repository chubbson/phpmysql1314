<?php

$reqUser = "user";
$reqPw = "pw";  

$allowedUser = "user"; 
$allowedPass = "1a1dc91c907325c69271ddf0c944bc72";

$givenUser = $_POST["user"];
$givenPass = md5($_POST["pass"]);


if($allowedUser === $givenUser 
 & $allowedPass === $givenPass)
{
	echo "User authorized"; 

}
else
{
	echo "</br>Access Denied"; 
	echo "</br>Hint: use 'user' as User and 'pass' as password"; 
}


?>