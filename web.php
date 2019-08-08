<?php 

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$messege = $_POST['messege'];


$email_from = '#';

$email_subject = 'New Feedback';

$email_body= "User Name : $name.\n".
				"User Email:$visitor_email.\n".
					"User messege: $messege.\n";

$to = "santhushrulz1999@gmail.com";

$headers = "Form: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);  

header("Location: webass.html") ;
 	











 ?>