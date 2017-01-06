<?php
/**
 * Created by PhpStorm.
 * User: souravchatterjee
 * Date: 12/10/16
 * Time: 12:05 PM
**/


$full_name = $_POST['full_name'];
$mail_from = $_POST['email_id'];
$phone = $_POST['phone'];
$mail_to = "sourav.c619@gmail.com";

// Construct email subject

$subject = 'Professional Painters: Form Submission By ' . $full_name;
$subject2 = 'Professional Painters: Confirmation Mail to ' .$full_name;

// Construct email body to owner
$body_message = 'From: ' . $full_name . "\r\n";
$body_message .= 'E-mail: ' . $mail_from . "\r\n";
$body_message .= 'Phone: ' . $phone . "\r\n";

// Construct email body to form filler

$body_message2 = 'This is it to confirm your submission ' . $full_name. "\r\n";
$body_message2 .= 'Name: ' . $full_name . "\r\n";
$body_message2 .= 'E-mail: ' . $mail_from . "\r\n";
$body_message2 .= 'Phone: ' . $phone . "\r\n";

// Construct email headers
$headers = "From:" . $mail_from . "\r\n";

$headers .= "Reply-To:" . $mail_to . "\r\n";
$headers2 = "From:" . $mail_to . "\r\n";

$headers2 .= "Reply-To:" . $mail_from . "\r\n";

mail($mail_to, $subject, $body_message, $headers);

mail($mail_from, $subject2, $body_message2, $headers2);

header('location: thankyou.php');











