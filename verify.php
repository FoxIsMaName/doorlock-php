<?php
$access_token = '2FFGevLRjlbzKli1poBDxAVNXrShXytLrBw4sTpG9lGFqQi8ObAqr2gdiMjs99Am8OLFZIYvn/ytIzZoifgk+6HWshJKVgNVg4JlifaklIChp0ENVaMRClEM6KzgkZuwfh+GS0t2kZdu2IJbo1bzmwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
