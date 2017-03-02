<?php
$access_token = 'qeOrtmZ1md3TlDQrdOGfZVcXta+7/Y2AEDm+KFIbz93CDtQ0gYVye6QjKQw6uy0CRYVXblI0OeYj6SGrANImV8sk+ft781svCF/DL8ucPFBKsRJrjPzJ7f8celt4zMk5QxPaWzehri/RjoZXNzFMUwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
