<?php

echo "<h1>sendmail</h1>";

$toMail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

var_dump($toMail);
echo "<br>";
var_dump($subject);
echo "<br>";
var_dump($message);

// fuck this php mail function
//mail($toMail, $subject, $message);
//echo 'Thank you for submitting a form!';

require_once('../3rdParty\PHPMailer_v5.1/class.phpmailer.php');

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

//$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->Subject    =  $subject;//;"PHPMailer Test Subject via smtp (Gmail), basic";
//$mail->AltBody    = $message;// "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML('<h1>test</test>'$message);

//$address = "chubbson@gmail.com";
$mail->AddAddress($toMail, "");
//$mail->MsgHTML($body);

echo '<br>';

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>