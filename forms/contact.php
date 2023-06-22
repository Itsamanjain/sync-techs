<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $message = $_POST['message'];

  // Validate the form data (you can add more validation if needed)

  // Send email
  $to = 'jainaman0744@gmail.com';
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $message = "Name: $name\r\nSubject: $subject\r\nEmail: $email\r\nMobile: $mobile\r\nMessage: $message";
  
  if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for your message. We will get back to you soon!';
  } else {
    echo 'Oops! Something went wrong. Please try again later.';
  }
}
?>
