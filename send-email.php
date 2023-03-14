<?php
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $datetime = $_POST['datetime'];

  // Set the recipient email address
  $to = 'vokeogigbah@outlook.com';

  // Set the email subject and message
  $subject = 'Appointment Request';
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nDate and Time: $datetime";

  // Set the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  mail($to, $subject, $message, $headers);

  // Redirect the user to a thank you page
  header('Location: thank-you.html');
?>
