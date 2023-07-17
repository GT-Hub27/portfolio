<?php
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecislchars($_POST['Name']);
  $email = htmlspecialchars ($_POST['email']);
  $message = htmlspecialchars ($_POST['Message']);

  // Validate the form data
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill in all fields.";
    exit;
  }

  // Set the recipient email address
  $recipient = "gteee27@gmail.com"; // Replace with your actual email address

  // Set the email subject

  // Set the email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";

  // Compose the email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n\n";
  $body .= "Message:\n$message";

  // Send the email
  if (mail($recipient, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>

