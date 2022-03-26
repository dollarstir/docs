<?php

// extract($_POST);

$email = $context['email'];
$mail = new Mail();
$response = $mail->sendmail('www.phpyolk.com', 'New user', 'New user has started using yolk email : '.$email.'', 'Yolk User', ['kpin463@gmail.com']);
echo $response;
