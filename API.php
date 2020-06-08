<?php

require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure

function mensaje($telefono,$texto){

$sid    = "AC5a9294cad01d97e2d5fc1681e9903f69";
$token  = "eb46d96f674854958207d53110521034";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:+$telefono", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "$texto"
                           ]
                  );
}