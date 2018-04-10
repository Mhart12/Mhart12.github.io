<?php
if(isset($_POST['email'])) {


	$email_to = "monica@whitehartportfolio.com";
	$email_subject = "Incoming Portfolio Message";
	function died($error) {
		echo "Sorry, but the code isn't working. The following error(s) occurred.<br>";
		echo $error;
		die();
	}
	$name = $_POST["name"];
	$email_message = "This is the message, hello " . ($name);
	$email_From = $_POST['email'];
	$headers = 'From: '.$email_From.'\r\n'.
		'Reply-To: '.$email_From.'\r\n' .
		'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	echo "Thank you! I will be in touch shortly!";
	}
?>
