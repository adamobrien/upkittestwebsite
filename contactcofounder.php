<?php

$email_to = "adamobrien03@gmail.com";
$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "Someone wants to talk about becoming a co-founder.";
$email_body = "Potential co-founder: ";
//
//// Send Email
//$mailerResult = mail($email_to, "$email_subject", $email_body, $email_headers, '-f ' . $cofounder);
//
////Check For Errors
//if($mailerResult) {
//
//    echo "Your email has been sent, I'll be in contact shortly!";
//    //echo "success";
//    //header( "refresh:1;url=index.html" );
//
//} else {
//
//    // echo "Error Sending Email!" . "<br><br>";
//	echo "invalid";
//    print_r(error_get_last());
//}

if (isset($_POST['submit'])) {
    $email_to = "a.j.davidson92@gmail.com";// this is your Email address
    $cofounderEmail = $_POST['cofounder-email']; // this is the sender's Email address
    mail($email_to, $email_subject, $email_body . $cofounderEmail, $email_headers);
    echo "Mail Sent. We will contact you shortly.";
}
?>