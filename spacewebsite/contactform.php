<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = '-fill in email-';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
				  "User Email: $visitor_email.\n".
				  "User Message: $message.\n";

	$to = "-fill in email-"

	$headers = "From $email_from\r\n";

	$headersv .= "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: contact.html");


?>