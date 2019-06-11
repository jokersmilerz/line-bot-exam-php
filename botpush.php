<?php



require "vendor/autoload.php";

$access_token = 'ucFv6c+fiR5+UP5u89gn4RNXK6DPqUsYurPHtfzRsf2rcMEjfvo+5nXUbJ8oa3ssVOIAROTB5EQeycbTEsB73SzWfY2LVe8N1ljGE7Xlx4SJjwxHSxCmvWiM+c4ANTosu/soGCiCzp3D1KZSAfAi6QdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'cc7b182ae203c6a0ffa2e264693ccb17';

$pushID = 'U4ae0fd3fb912188b08c4ec753ffd3e84';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







