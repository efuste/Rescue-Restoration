<?php

$recipient = "your-email@example.com";
$name = $_POST['nameeval'];
$email = $_POST['emaileval'];
$subject = $_POST['subjecteval'];
$message = $_POST['messageeval'];

if (isset($_POST['emaileval'])) {	
	
  $ip = getenv('REMOTE_ADDR');
  $host = gethostbyaddr($ip);	
  $mess = "Name: ".$name."\n";
  $mess .= "Email: ".$email."\n";
  $mess .= "Subject: ".$subject."\n";
  $mess .= "Message: ".$message."\n\n";
  $mess .= "IP:".$ip." HOST: ".$host."\n";
  
  $headers = "Lawyers: <".$email.">\r\n"; 

  $sent = mail($recipient, $subject, $mess, $headers); 
  

$text = "Thanks for contacting us! We will check your message within a few minutes.";
	
echo '<xml>	<someText>'.$text.'</someText> </xml>';

} else {
	die('Invalid entry!');
}


?>