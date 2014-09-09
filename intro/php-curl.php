<?php

$url = "http://oreilly.com";
$url = 'http://weather.yahooapis.com/forecastrss?p=IDXX0058';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
var_dump($result);


