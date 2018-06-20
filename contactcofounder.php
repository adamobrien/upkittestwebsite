<?php

$email_to = "adamobrien03@gmail.com";

$cofounder = "test@code.com";
//isset()
//$cofounder = isset($_POST['cofounder-email']) ? $_POST['cofounder-email'] : '';
//empty()
//$cofounder = !empty($_POST['cofounder-email']) ? $_POST['cofounder-email'] : '';


$email_headers = "From: Upkit" . "\r\n" . "Reply-To: website@yourwebsite.com";
$email_subject = "Someone wants to talk about becoming a co-founder." ;
$email_body = "Potential co-founder: " . $cofounder;

// Send Email
$mailerResult = @mail($email_to, "$email_subject", $email_body, $email_headers, '-f ' . $cofounder);

//Check For Errors
if($mailerResult) {

    echo "Your email has been sent, I'll be in contact shortly!";
    //echo "success";
    //header( "refresh:1;url=index.html" );

} else {

    // echo "Error Sending Email!" . "<br><br>";
	echo "invalid";
    print_r(error_get_last());
}

?>