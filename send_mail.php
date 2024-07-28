<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "Ahmed@ashourgroup.net";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='alert alert-success' role='alert'>Your message was sent successfully.</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>There was an error sending your message. Please try again later.</div>";
    }
}
?>
