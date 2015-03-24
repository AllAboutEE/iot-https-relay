<?php

require('twilio-php/Services/Twilio.php');

$from = $_POST['From'];
$to = $_POST['To'];
$body = $_POST['Body'];
$sid = $_POST['sid'];
$token = $_POST['token'];

$client = new Services_Twilio($sid,$token);

$call = $client->account->calls->create(
    $from, 
    $to, 
    'http://twimlets.com/echo?Twiml=%3CResponse%3E%3CSay%3E'.urlencode($body).'%3C%2FSay%3E%3C%2FResponse%3E'

);


print $call->status;

