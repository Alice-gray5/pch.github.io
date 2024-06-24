<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Compose email message
    $to = "joykingace01@gmail.com";
    $subject = "New Appointment Request";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Preferred Date: $date\n";
    $body .= "Message:\n$message";

    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for your appointment request. We will contact you shortly.</p>";
    } else {
        echo "<p>Sorry, there was an error processing your request.</p>";
    }
}
?>
