<?php
require "./vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;
$mail->From = "youremail@gmail.com";
$mail->FromName = "M Habib"; //To address and name 
$mail->addAddress("mhabib555@gmail.com", "Recepient Name"); //Recipient name is optional
$mail->isHTML(true);
$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent successfully";
}
