<?php
  if(isset($_POST['formSubmit']))
  {
	   
	   $to = 'support@malcolmferguson.online';
	   $subject = 'Feedback from my site';
	   $message .= 'Name: ' . $_POST['Name'] . "\r\n\r\n";
	$message .= 'Email: ' .$_POST['Email'] . "\r\n\r\n";
	$message .= 'Comments: ' .$_POST['Comments'] . "\r\n\r\n";
	$headers = "From: malcolmferguson.online\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	
	if  ($email) {
		$headers .= "\r\nReply-To: $email";
	}
	   

  $success = mail($to, $subject, $message, $headers);
 
}
    
?>


<!DOCTYPE html>

<html>
<head>
<title>Webform acknowledgement</title>
</head>

<body>
<?php if (isset($success) && $success) { ?>
<h1>Thank You.</h1>
<p>Your message has been sent.</p>
<?php } else { ?>
<h1>Oops!</h1>
<p>Sorry. There was a problem sending your message.</p>
<?php } ?>

</body>

</html>