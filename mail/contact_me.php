<?php

/*
	EN DESUSO CON NETLIFY
*/

header("Access-Control-Allow-Origin: bilbao.net.ar");
header("Access-Control-Allow-Methods: POST");

// Check for empty fields
if (empty($_POST['nombre'])   ||
    empty($_POST['mail'])     ||
    empty($_POST['telefono']) ||
    empty($_POST['mensaje'])  ||
    !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
	echo "No arguments Provided!";
	return false;
}
   
$name = strip_tags(htmlspecialchars($_POST['nombre']));
$email_address = strip_tags(htmlspecialchars($_POST['mail']));
$phone = strip_tags(htmlspecialchars($_POST['telefono']));
$message = strip_tags(htmlspecialchars($_POST['mensaje']));
   
// Create the email and send the message
$to = 'bilbaomanuel98@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Nuevo mensaje de: $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@bilbao.net.ar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   

return mail($to, $email_subject , $email_body, $headers);

?>