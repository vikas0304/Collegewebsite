<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'vikpal377@gmail.com';

$email_subject = "New form submission";

$email_body = "User name: $name.\n".
                "User Email: $visitor_email\n".
                "user subject: $subject.\n";

$to = 'vikpal377@gmai.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>