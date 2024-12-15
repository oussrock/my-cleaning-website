<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "oussrock@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email" . "\r\n" . "Reply-To: $email";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
}
?>
