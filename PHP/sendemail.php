<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name       = @trim(stripslashes($_POST['name']));
    $email      = @trim(stripslashes($_POST['email']));
    $message    = @trim(stripslashes($_POST['message']));

    $email_from = $email;
    $email_to = 'admin@estore.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
