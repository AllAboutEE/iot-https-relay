<?php

require('twilio-php/Services/Twilio.php');

$from = $_POST['From'];
$to = $_POST['To'];
$body = $_POST['Body'];
$sid = $_POST['sid'];
$token = $_POST['token'];

$client = new Services_Twilio($sid,$token);

$message = $client->account->messages->sendMessage(
        $from,
        $to,
        $body
    );

print $message->sid;



