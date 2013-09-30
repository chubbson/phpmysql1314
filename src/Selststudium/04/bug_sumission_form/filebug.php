<?php

$allowedUser = "user"; 
$allowedPass = "1a1dc91c907325c69271ddf0c944bc72";

$givenUser = $_POST["user"];
$givenPass = md5($_POST["pass"]);

// reset password 
$_POST["pass"] = ""; 

$givenUser = $_POST["user"];
$givenEmail = $_POST["email"];
$givenBugtype = $_POST["bugtype"];
$givenPriority = $_POST["priority"];
$uploadedFilePath = "/uploads/" . $_FILES["userfile"]["name"];
$givenMessage = $_POST["text"];

if($allowedUser === $givenUser 
 & $allowedPass === $givenPass)
{
	echo "User authorized"; 

	echo "</br>";
	var_dump($_FILES['userfile']['name']);
	echo "</br>";
	var_dump($_FILES['userfile']['type']);
	echo "</br>";
	var_dump($_FILES['userfile']['size']);
	echo "</br>";
	var_dump($_FILES['userfile']['tmp_name']);
	echo "</br>";
	var_dump($_FILES['userfile']['error']);
	echo "</br>";
	var_dump($_POST);
	
	$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
	$temp = explode(".", $_FILES["userfile"]["name"]);
	echo "</br>";
	var_dump($temp);
	$extention = end($temp);
	echo "</br>Extention: ".$allowedExts[1]; 
	echo $extention; 
	echo "</br>".$_FILES["userfile"]["type"]; 
	echo "</br>UserfileSize: ".$_FILES["userfile"]["size"];
	echo "</br>Userfile is greatre 0: ";
	if($_FILES["userfile"]["size"] > 0){ echo "true";}else{ echo "false";}
	echo "</br>Is Extention allowed? "; 
	if (in_array($extention, $allowedExts)){ echo "true";}else{ echo "false";}
	echo "</br> extention: ".$extention;
	echo "</br> allowed extentions: ";
	var_dump($allowedExts); 
	
	if ((   ($_FILES["userfile"]["type"] == "image/gif")
	     || ($_FILES["userfile"]["type"] == "image/jpeg")
	     || ($_FILES["userfile"]["type"] == "image/jpg")
	     || ($_FILES["userfile"]["type"] == "image/pjpeg")
	     || ($_FILES["userfile"]["type"] == "image/x-png")
	     || ($_FILES["userfile"]["type"] == "image/png")
		)
	    && ($_FILES["userfile"]["size"] > 0)
	    && in_array($extention, $allowedExts)
	   )
	{
		if ($_FILES["userfile"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["userfile"]["error"] . "<br>";
		}
		else
		{
			echo "Upload: " . $_FILES["userfile"]["name"] . "<br>";
			echo "Type: " . $_FILES["userfile"]["type"] . "<br>";
			echo "Size: " . ($_FILES["userfile"]["size"] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES["userfile"]["tmp_name"] . "<br>";
	 
			if (file_exists("upload/" . $_FILES["userfile"]["name"]))
			{
				echo $_FILES["userfile"]["name"] . " already exists. ";
			}
			else
			{
				move_uploaded_file($_FILES["userfile"]["tmp_name"],
								   "/var/www/uploads/" . $_FILES["userfile"]["name"]);
				echo "Stored in: " . "/var/www/uploads/" . $_FILES["userfile"]["name"];
			}	
			
			//do mailing stuff
			echo "<h1>sendmail</h1>";
			
			$toMail = $_POST['email'];
			$subject = "HAD: New Bug Submitted by: ".$user;
			
			$message = "New Bug submitted: </br>"
			          ."User: ".$givenUser."</br>"
			          ."Email: ".$givenEmail."</br>"
			          ."Priority: ".$givenPriority."</br>"
					  ."UploadedFile: ".$uploadedFilePath."</br>"
					  ."Meesage: "."</br>"
					  .$givenMessage;
			
			require_once('3rdParty/PHPMailer_v5.1/class.phpmailer.php');
			
			$mail             = new PHPMailer();
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = "mail.yourdomain.com"; // SMTP server
			$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
													   // 1 = errors and messages
													   // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "chubbson@gmail.com";  // GMAIL username
			$mail->Password   = "";            // GMAIL password
			$mail->SetFrom('david_hauri@alkfass.com', 'First Last');
			
			$mail->Subject    =  $subject;//;"PHPMailer Test Subject via smtp (Gmail), basic";
			$mail->MsgHTML($message);
			$address = "chubbson@gmail.com";
			$mail->AddAddress($address, "");
			
			echo '</br>beforesend';

			if(!$mail->Send()) {
			  echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			  echo "Message sent!";
			}
						
			
		}
	}
	else
	{
	  echo "No File added";
	}
}
else
{
	echo "</br>User is not allowed to submit a new bug."; 
	echo "</br>Hint: use 'user' as User and 'pass' as password"; 
}

?>