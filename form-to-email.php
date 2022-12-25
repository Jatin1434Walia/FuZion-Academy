<?php
if(!isset($_POST['submit']))
{
    echo "error: you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['visitor_email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email)){
    echo "Name and email are mandatroy!";
    exit;
}
$email_from = 'jkw1434@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "You have received a message from $name.\n".
"email address : $visitor_email".
"Here is the message:\n $message";

$to = "jkw1434@gmail.com";
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);
?>