<?php

//phpinfo();

// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

echo "<h1>Send Mail</h1>";
// Send
//mail('chubbson@gmail.com', 'My Subject', $message);


echo '<form method="POST" action="sendMail.php">';
echo '<br>To: <input type="email" name="email" required placeholder="Enter a valid email address">';
echo '<br>Subject: <input type="text" name="subject" required>';
echo '<br>Message: <br><textarea rows="10" cols="50" name="message"></textarea> ';
echo '<br><input type="submit" value="Send">';
echo '</form>';

?>
