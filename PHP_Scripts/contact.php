<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['contact_name'];
		$email = $_POST['contact_email'];
		$message = $_POST['contact_message'];
		$from = 'ABEBOH Contact Form'; 
		$to = 'persiderosalie@gmail.com'; 
		$subject = 'Message from Contact ABEBOH';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['contact_name']) {
			$errName = 'Please enter your name';
		}
		
		// Check for email
		if (!$_POST['contact_email'] || !filter_var($_POST['contact_email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check for message
		if (!$_POST['contact_message']) {
			$errMessage = 'Please enter your message';
		}
		
 
	// send the email

		require_once "vendor/autoload.php";

		//PHPMailer Object
		$mail = new PHPMailer;
		
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 2;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = "smtp.gmail.com";
		//Set the SMTP port number - likely to be 25, 465 or 587
		$mail->Port = 587;

		//From email address and name
		$mail->From = "persiderosalie@gmail.com";
		$mail->FromName = "PersideRosalie";

		//To address and name
		$mail->addAddress("persiderosalie@gmail.com");//recipient address

		//Address to which recipient will reply
		$mail->addReplyTo($email, "Reply");

		//Send HTML or Plain Text email
		$mail->isHTML(true);

		$mail->Subject = $subject;
		$mail->Body = $message;//html version
		//$mail->AltBody = "This is the plain text version of the email content";

		if(!$mail->send()) 
		{
				echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
				echo "Message has been sent successfully";
		}
}
?>
