<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];
 
$emal_from = 'drsadik-ceo.github.io';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
               "User email: $visitor_email.\n".
               "subject: $subject.\n".
               "User message: $message.\n";

$to = 'assadikmusa490@gmail.com';

$header = "from: email_from \r\n";

$header .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>