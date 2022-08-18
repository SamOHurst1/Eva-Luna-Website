<?php

$message_sent = false;

if(isset($_POST['submit'])) {

//    if(filter_var($_POST('email'), FILTER_VALIDATE_EMAIL)) {



    // submit the form

$contact_name    =  $_POST["contact_name"];
$contact_email   =  $_POST["contact_email"];
$message            =  $_POST["body"];


$to = "sam.hurst2@outlook.com";
$body = "";

$body .= "From:".$contact_name. "\r\n";
$body .= "Email:".$contact_email. "\r\n";
$body .= "Message:".$message. "\r\n";

mail($to, $contact_name, $body);

$message_sent = true;
   

}


// }

if($message_sent) {
    echo "thanks we'll be in touch";
} else {
    echo "sorry something went wrong please try again";
}

?>