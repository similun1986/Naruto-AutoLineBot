<?php
$access_token = 'sbQaa0iwGt6ilgF8l/KCeC9+ccsq8v/voUh53Sc2+Kv7Nbl0YjjHJ6jpxdbP4fWP7LAlu1luYN/1tmEGmEu6dE+OsMrBOFAcLqqfKJ//A5yoUTnEIOjn9T8EJpo1pvk2ztcx5i9680b2k0ahRgrppgdB04t89/1O/w1cDnyilFU=';

$proxy = 'http://fixie:0jMECBPPUU6WDu9@velodrome.usefixie.com:80';
$proxyauth = 'http://fixie:0jMECBPPUU6WDu9@velodrome.usefixie.com:80';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
