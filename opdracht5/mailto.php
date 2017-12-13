<?php
//Variables
$to = '25069@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = 'From: ' . $_POST['from'];

//Sending
mail($to, $subject, $message, $from);

//Confirmation
echo 'Your mail has been send. Thank you for your time. <3';