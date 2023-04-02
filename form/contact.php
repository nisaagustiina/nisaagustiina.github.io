<?php

$name =  $_POST['name'];
$email =  $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "nisaagustiina@gmail.com";
$body = "From : $email \n
        Name : $name \n
        About : $message";

mail($to, $sub, $body);

echo "Thank you to contact me!";

?>