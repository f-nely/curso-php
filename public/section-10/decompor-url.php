<?php

$url = "https://www.google.com";

$arrayUrl = parse_url($url);

echo "<pre>";
print_r($arrayUrl);

$url2 = "http://horadecodar.com.br/?buscar=php";

$arrayUrl2 = parse_url($url2);

echo "<pre>";
print_r($arrayUrl2);