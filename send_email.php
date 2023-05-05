<?php
// Include the PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

// Retrieve the form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Configure the SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';

// Set the email content
$mail->setFrom('nillvaghela11@gmail.com', 'Nilesh');
$mail->addAddress($email);
$mail->Subject = $subject;
$mail->Body = $message;

// Send the email
if (!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent successfully.';
}
