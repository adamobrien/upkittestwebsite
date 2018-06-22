<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email_to = "adamobrien03@gmail.com";
$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "Someone wants to talk about becoming a co-founder.";
$email_body = "Potential co-founder: ";

if (isset($_POST['submit'])) {
    $cofounderEmail = $_POST['cofounder-email']; // this is the sender's Email address
    mail($email_to, $email_subject, $email_body . $cofounderEmail, $email_headers);
    header("refresh:1; url = /index.html");
    echo "Mail Sent. We will contact you shortly.";
}
?>