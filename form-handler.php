<?php
$name = $-POST['name']
$email = $-POST['email']
$subject = $-POST['subject']
$message = $-POST['message']

$my_email = 'hire@sunniul.com'
$email_subject = 'New Message!!'
$email_body = "Name : $name.\n". 
              "Email: $email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n";
$to = 'alamsunniulbdi@gmail.com';
$headers= "From: $my_email \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");
?>