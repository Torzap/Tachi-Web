<?php
include ('tw-includes/mailing.php');

require_once 'tw-includes/class.phpmailer.php';
	$mail = new PHPMailer ();


	$mail -> From = $SMTP['UserEMail'];
	$mail -> FromName = $SMTP['RemEMail'];
	$mail -> AddAddress ("$Email");
	$mail -> Subject = "$asunto"; 
	$mail -> Body = '' .$Body. '';
	$mail -> IsHTML (true);

	$mail->CharSet = 'iso-8859-1';
	
	$mail->IsSMTP();
	
	$mail->SMTPSecure = "ssl";
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;

	$mail->SMTPAuth = true;

	$mail->Username = $SMTP['UserGmail']; 
	$mail->Password = $SMTP['PassGmail'];
	$mail->Send();
?>