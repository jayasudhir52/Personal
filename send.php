<?php
$email = $_POST['email'];

$to = "your@email.com";
$subject = "New Login Email";
$message = "User entered email: " . $email;
$headers = "From: no-reply@yourdomain.com";

mail($to, $subject, $message, $headers);
echo "Email sent!";
?>
