<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output (change to 2 for detailed debug)
        $mail->isSMTP();                           // Set mailer to use SMTP
        $mail->Host = 'smtp.example.com';          // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                    // Enable SMTP authentication
        $mail->Username = 'your-email@example.com'; // SMTP username
        $mail->Password = 'your-password';          // SMTP password
        $mail->SMTPSecure = 'tls';                 // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                         // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('your-email@example.com'); // Add a recipient

        // Content
        $mail->isHTML(false); // Set email format to HTML
        $mail->Subject = 'Contact Form Submission: ' . $subject;
        $mail->Body    = "You have received a new message from your website contact form.\n\n" .
                         "Name: $name\n" .
                         "Email: $email\n" .
                         "Message:\n$message";

        $mail->send();
        echo '<div class="alert alert-success" role="alert">Thank you! Your message has been sent.</div>';
    } catch (Exception $e) {
        echo '<div class="alert alert-danger" role="alert">Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Sorry, something went wrong. Please try again.</div>';
}
?>
