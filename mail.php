<?php
		$mailTo = "sohamsarfare@gmail.com";
		$subject = "Enquiry about Stapler";
		$body = "Enquiry about Stapler by:
<br><br>
NAME: ".$_POST['name']."<br>
FROM: ".$_POST['email']."<br>
<br>
<br>";	
		$headers = "To: <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//send email
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);
	header('');

?>