<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['contact_name'];
		$email = $_POST['contact_email'];
		$message = $_POST['contact_message'];
		$from = $email; 
		$to = 'persiderosalie@gmail.com'; 
		$subject = $_POST['contact_subject'];
		
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

		require 'PHPMailer/PHPMailerAutoload.php';

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
		
		//enable smtp authentication
		$mail->SMTPAuth = true;
		
		//Provide username and password     
		$mail->Username = "persiderosalie@gmail.com";
		$mail->Password = ""; 

		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls"; 
		
		//From email address and name
		$mail->From = $email;
		$mail->FromName = $name;

		//To address and name
		$mail->addAddress($to);//recipient address

		//Address to which recipient will reply
		$mail->addReplyTo($email, "Reply");

		//Send HTML or Plain Text email
		$mail->isHTML(true);

		$mail->Subject = $subject;
		$mail->Body = $body;//html version
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
