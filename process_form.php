<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  
  // Set up email parameters
  $to = "aubreyargyle9@gmail.com"; // Replace with your email address
  $subject = "Form Submission";
  $message = "Name: $name\nEmail: $email";
  $headers = "From: $email";
  
  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Error sending email.";
  }
}
?>
