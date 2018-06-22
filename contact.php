<?php
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);

$email_to = "adamobrien03@gmail.com";
$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "A new person has signed up for updates for some reason!" ;
$email_body = "New Signup: " . $email;

if (isset($_POST['signupsubmit'])) {
	$email = $_POST['email'];
    mail($email_to, $email_subject, $email_body . $$email, $email_headers);
    header("refresh:1; url = /index.html");
    echo "Mail Sent. We will contact you shortly.";
} 
// else {

//     echo "Error Sending Email!" . "<br><br>";
//     print_r(error_get_last());
// }
?>