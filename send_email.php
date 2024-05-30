<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email_id = $_POST["email_id"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    // Additional headers
    $headers = "From: chroma3131@gmail.com\r\n";
    $headers .= "Reply-To: chroma3131@gmai.com\r\n";
    $headers .= "Content-Type: text/html\r\n"; // If you're sending HTML content
        echo "Email sent successfully!";
    } else {

    // Send email
    if (mail($name, $email_id, $phone, $subject, $message, $headers)) {
        echo "Email sending failed.";
    }
}
?>
