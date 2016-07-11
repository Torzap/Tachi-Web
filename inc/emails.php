<?php
require('lib/class.phpmailer.php');
require('lib/class.smtp.php');
$mail = new PHPMailer ();

$mail -> From = $wb['MAILUser'];
$mail -> FromName = $wb['MAILName'];
$mail -> AddAddress ("$Email");
$mail -> Subject = "$asunto"; 
$mail -> Body = '' .$Body. '';
$mail -> IsHTML (true);

$mail->IsSMTP();
$mail->Host = $wb['MAILHost'];
$mail->Port = $wb['MAILPort'];

$mail->SMTPAuth = true;

$mail->Username = $wb['MAILUser'];
$mail->Password = $wb['MAILPass'];

#$mail->Send();

if(!$mail->Send()){
	echo($errno);
} else {
	echo($sucess);
};
?>
