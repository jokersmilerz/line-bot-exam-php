<?php


$access_token = 'ucFv6c+fiR5+UP5u89gn4RNXK6DPqUsYurPHtfzRsf2rcMEjfvo+5nXUbJ8oa3ssVOIAROTB5EQeycbTEsB73SzWfY2LVe8N1ljGE7Xlx4SJjwxHSxCmvWiM+c4ANTosu/soGCiCzp3D1KZSAfAi6QdB04t89/1O/w1cDnyilFU=';

$userId = 'U4ae0fd3fb912188b08c4ec753ffd3e84';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

