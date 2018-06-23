<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email_to = "adamobrien03@gmail.com";
$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "Someone wants to talk about becoming a co-founder.";
$email_body = "Potential co-founder: ";

if (isset($_POST['cofounder-submit'])) {
    $cofounderEmail = $_POST['cofounder-email']; // this is the sender's Email address

    $success = mail($email_to, $email_subject, $email_body . $cofounderEmail, $email_headers);
    header("refresh:1; url = /index.html");
// redirect to success page
if ($success){
    echo "success";
}else{
    echo "invalid";
}

}
?>