<?php

extract($_POST);

$mail = new Mail();
$response = $mail->sendmail('www.phpyolk.com', 'New user', 'New user has started using yolk email : '.$usermail.'', 'Yolk User', ['kpin463@gmail.com']);
echo json_encode($response);
