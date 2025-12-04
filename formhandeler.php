<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'nawvras90@gmail.com';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n" .
              "User Email: $visitor_email.\n" .
              "Subject: $subject.\n" .
              "User Message: $message.\n";

$to = 'sarvwan.100@gmail.com';

// FIXED: Missing semicolons + proper header formatting
$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";

// Send mail
mail($to, $email_subject, $email_body, $headers);

// Redirect
header("Location: contact.html");
exit();
?>
