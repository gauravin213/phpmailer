
<?php

require("class.phpmailer.php");
require("class.smtp.php");

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "alvin.quickfix@gmail.com"; //"from@yourdomain.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("lores.quickfix@gmail.com", "Recepient Name");
$mail->addAddress("paul.quickfix@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
//$mail->addReplyTo("lores.quickfix@gmail.com", "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}