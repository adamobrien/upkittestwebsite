<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email_to = "adamobrien03@gmail.com";

$suggestionEmail = "";
//isset()
$suggestionEmail = isset($_POST['suggestionEmail']) ? $_POST['suggestionEmail'] : '';
//empty()
$suggestionEmail = !empty($_POST['suggestionEmail']) ? $_POST['suggestionEmail'] : '';


$suggestionBody = "";
//isset()
$suggestionBody = isset($_POST['suggestionBody']) ? $_POST['suggestionBody'] : '';
//empty()
$suggestionBody = !empty($_POST['suggestionBody']) ? $_POST['suggestionBody'] : '';



$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "Someone has left a note/suggestion for you." ;
$email_body = "Suggestion: " . $suggestionBody . " from: " . $suggestionEmail;

// Send Email
$mailerResult = @mail($email_to, "$email_subject", $email_body, $email_headers, '-f ' . $suggestionEmail);

// Check For Errors
if($mailerResult) {

    echo "Your email has been sent, I'll be in contact shortly!";
    header( "refresh:1;url=index.html" );


} else {

    echo "Error Sending Email!" . "<br><br>";

    print_r(error_get_last());
}
?>