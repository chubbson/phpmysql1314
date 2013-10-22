<?php

// 


$givenUser = $_POST["user"];
$creationDt = date("YmdHis");
$givenTitle = $_POST["title"];
$givenContent = $_POST["content"];

BlogCtxOOperation::SaveBlogCtx($creationDt, $givenUser, $givenTitle, $givenContent);

// mostly moved to function

if (file_exists("upload/" . $_FILES["userfile"]["name"]))
{
	echo $filename . " already exists. ";
}
else
{

	$data = $givenTitle."~".$givenContent;

	var result = file_put_contents ( $filename , $data )

/*
	move_uploaded_file($_FILES["userfile"]["tmp_name"],
					   "/var/www/uploads/" . $_FILES["userfile"]["name"]);
	echo "Stored in: " . "/var/www/uploads/" . $_FILES["userfile"]["name"];
*/

}	


?>