<?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$sybject = $_Post['subject'];
$message = $_POST['message'];


$email_from = 'bohdan.dz.92@gmail.com';
$email_subject = "Subject: $subject.\n";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
$to = "bohdan.dz.92@gmail.com";

$headers = "From $email_from\r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>