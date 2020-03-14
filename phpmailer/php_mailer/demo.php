<?php


require_once 'class.phpmailer.php';
require_once 'class.smtp.php';

$mail = new PHPMailer();

$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "mail.fliyproducts.com"; // specify main and backup server
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = "ssl";
$mail->Port = 587; 
$mail->Username = "getfliy@fliyproducts.com"; // SMTP username
$mail->Password = "T4F!oLjcw0zs"; // SMTP password
$mail->isHTML(true);

/*$mail->From = $from;
if($from=='sean@hrada.com'){
$mail->FromName = "Sean";
}else if($from=='sheri@hrada.com'){
$mail->FromName = "Sheri"; 
}else{
//$mail->FromName = ""; 
}*/

$mail->From ='alvin.quickfix@gmail.com';
$mail->addaddress('lores.quickfix@gmail.com', "Sheri");

//$mail->addcc('peter@hrada.com', 'Peter');
//$mail->addcc('sean@hrada.com', 'Sean');


$mail->Subject = 'HamptonRoadsAutoShow.com - Contest Entry';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';


echo '==>'.$mail->Send();