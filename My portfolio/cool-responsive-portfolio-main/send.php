<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'guna8764gg@gmail.com'; // Replace with your email address
    $headers = "From: " . $email;

    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Full Name: $fullname\n";
    $body .= "Email: $email\n";
    $body .= "Mobile: $mobile\n\n";
    $body .= "Message:\n$message\n";

    mail($to, $subject, $body, $headers);
    echo "Message sent!";
}
?>
