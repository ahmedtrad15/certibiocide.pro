<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = htmlspecialchars($_POST['name']);
  $email   = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Send email (basic example)
  $to      = "ahmed.trad15@gmail.com";
  $subject = "New Contact Form Message";
  $body    = "From: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Message sent!";
  } else {
    echo "Something went wrong.";
  }
}
?>