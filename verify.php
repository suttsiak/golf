<?php
$access_token = 'RXhevaDMYFmImxZ2D7OlAY9OrrOmAL2yyIags1kFtCth/p8R2gtXZF8HAAz4NuIQN4JJO0BRStBrrvyXGFgoRXxTvIX0FRXtRvNXpaKnjtBhJT70n1gRMoVBsDD+qBrJudvuDn+ERXE1EzXZ1aNqMAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
  