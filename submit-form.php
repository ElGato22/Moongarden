<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'elgato22@moongarden.uk';

// Set the email subject
$subject = 'New Message from Moongarden Cat Cafe';

// Set the email message
$message = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

// Set the email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $name <$email>\r\n";

// Send the email
mail($to, $subject, $message, $headers);

// Redirect to thank-you page
header('Location: thank-you.html');
exit;
?>
