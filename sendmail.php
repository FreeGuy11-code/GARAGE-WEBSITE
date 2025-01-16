<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $to = 'freeguycybergod@gmail.com';
  $subject = 'New Message from Website';
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

  $headers = 'From: ' . $email . "\r\n" .
              'Reply-To: ' . $email . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $body, $headers);

  echo 'Message sent successfully!';
?>
