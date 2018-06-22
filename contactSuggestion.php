<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email_to = "adamobrien03@gmail.com";
$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "Someone has left a note/suggestion for you." ;

if (isset($_POST['suggestionsubmit'])) {
    $suggestionEmail = $_POST['suggestionEmail']; 
    $suggestionBody = ($_POST['suggestionBody']);
    $email_body = "Suggestion: " . $suggestionBody . " from: " . $suggestionEmail;
    mail($email_to, $email_subject, $email_body . $suggestionEmail, $email_headers);

    header("refresh:1; url = /index.html");
    echo "Mail Sent. We will contact you shortly.";
}
?>