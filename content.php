<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$country = $_POST['country'];

$email_from =  'lawal4211@gmail.com';

$email_from =  'New Form Submission';

$email_from =  "User Name: $name.\n".
                            "User Email: $visitor_email.\n".
                            "User Message: $message.\n".
                            "User Country: $country.\n";

$to = "Lawal4211@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail ($to,$email_subject,$email_body,$headers);
header("Location: contact.html");


?>
