<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */

$email_to = "adamobrien03@gmail.com";

$email = "";
//isset()
$email = isset($_POST['email']) ? $_POST['email'] : '';
//empty()
$email = !empty($_POST['email']) ? $_POST['email'] : '';


$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "A new person has signed up for updates for some reason!" ;
$email_body = "New Signup: " . $email;

// Send Email
$mailerResult = @mail($email_to, "$email_subject", $email_body, $email_headers, '-f ' . $email);

// Check For Errors
if($mailerResult) {

    echo "Your email has been registered, we'll be in touch shortly.";
    header( 'url: /index.html');
    exit;

} else {

    echo "Error Sending Email!" . "<br><br>";

    print_r(error_get_last());
}
?>