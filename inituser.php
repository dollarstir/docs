<?php

$mail = new Mail();
$response = $mail->sendmail('www.phpyolk.com', 'New user', 'New user has started using yolk', 'Yolk User', ['kpin463@gmail.com']);
echo json_encode($response);
