<?php
$access_token = 'MNbxiz5NMJjisTfks3FGpmu/NLpHiBseUVdXHhpq/QosW00nRSy9B7XwGwb2Pe3GW0pVdbLJ0GpNVzIrzUxHKFsLY2k069zSEqxnOq4Pig9jFDNY2OuTVezGHqtxZ8CYDbdMl77Mk8dZioYZ7rMClgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
