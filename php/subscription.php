<?php
/*
Name: 			Contact Form
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	1.1.0
*/

namespace EZYContactForm;

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/src/PHPMailer.php';
require 'php-mailer/src/SMTP.php';
require 'php-mailer/src/Exception.php';

// Step 1 - Enter your email address below.
$email = 'info@curwinbusinesscentre.com';
// $email = 'm.muzamilejaz@gmail.com';
// $email = 'muzamil@techstormsolutions.com';

// If the e-mail is not working, change the debug option to 2 | $debug = 2;
$debug = 0;

$subject = "Job Alerts Subscription Request";

// If contact form don't have the subject input, change the value of subject here

$message = '';

if(empty($_POST['email'])) {
	$arrResult = array ('response'=>'success', 'status'=>400);
	echo json_encode($arrResult);
}

foreach($_POST as $label => $value) {
	$label = ucwords($label);

	$message .= "<b>".$label."</b>: " . nl2br($value, ENT_QUOTES) . "<br>\n";
}

$mail = new PHPMailer(true);

try {

	$mail->SMTPDebug = $debug;                                 // Debug Mode

	$mail->AddAddress($email);	 						       // Add another recipient

	$mail->SetFrom($email, $_POST['name']);
	$mail->AddReplyTo($_POST['email']);

	$mail->IsHTML(true);                                       // Set email format to HTML

	$mail->CharSet = 'UTF-8';

	$mail->Subject = $subject;
	$mail->Body    = $message;

	$mail->Send();
	$arrResult = array ('response'=>'success', 'status'=>200);

} catch (Exception $e) {
	$arrResult = array ('response'=>'error','errorMessage'=>$e->errorMessage());
} catch (\Exception $e) {
	$arrResult = array ('response'=>'error','errorMessage'=>$e->getMessage());
}

if ($debug == 0) {
	echo json_encode($arrResult);
}