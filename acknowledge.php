<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acknowledge</title>
</head>

<body>
<?php if (isset($success) && $success) { ?>
<h1>Thank You</h1>
<p>Your message has been sent.</p>
<?php } else { ?>
<h1>Oops!</h1>
<p>Sorry, there was a problem sending your message.</p>
<?php } ?>

<?php
if(isset($_POST['send'])) {
	$to = 'michael_szkolnik@yahoo.com'; // Use your own email address
	$subject = 'Feedback from my site';
}
$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
$message .= 'Comments: ' . $_POST['comments'];

$success = mail($to, $subject, $message, $headers, '-michael_szkolnik@yahoo.com');
	
$headers = "From: mike_szkolnik@yahoo.com\r\n";
$headers .= 'Content-Type: text/plain; charset=utf-8';
	
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email) {
	$headers .= "\r\nReply-To: $email";
}
?>
</body> 
</html>