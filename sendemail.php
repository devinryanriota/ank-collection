<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contacting us. As early as possible  we will contact you '
	);

		if(isset($_POST['submit'])
		{
			$name = @trim(stripslashes($_POST['name']));
			$email = @trim(stripslashes($_POST['email']));
			$subject = @trim(stripslashes($_POST['subject']));
			$message = @trim(stripslashes($_POST['message']));

			$email_from = $email;
	    $email_to = 'devin.ryan@student.umn.ac.id';//replace with your email

	    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
		}



		//var_dump($name);

		/*$name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];*/


    echo json_encode($status);
    die;
	?>
