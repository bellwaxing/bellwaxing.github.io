<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'bellwaxing@gmail.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $fullname\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Please try again later.';
    }
}
?>
