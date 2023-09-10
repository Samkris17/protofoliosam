<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST['subject'];
    $message = $_POST["message"];
    
    $to = "samuelkris99@gmail.com"; // Replace with your Gmail address
    $from = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    mail($to, $from, $subject, $message, $headers);
    
    // Redirect back to the form or a thank-you page
    header("Location: contact.html"); // Change this URL as needed
    exit;
}
?>