<?php
$is_float=filter_var("no es un floar", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
$is_float2=filter_var(2.5, FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
var_dump($is_float);
var_dump($is_float2);
$is_int=filter_var("no es un INT", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_THOUSAND);
$is_int2=filter_var(2, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_THOUSAND);
var_dump($is_int);
var_dump($is_int2);
$is_ip=filter_var("255.255.255", FILTER_VALIDATE_IP, FILTER_FLAG_ALLOW_THOUSAND);
$is_ip2=filter_var("255.255.255.224", FILTER_VALIDATE_IP, FILTER_FLAG_ALLOW_THOUSAND);
var_dump($is_ip);
var_dump($is_ip2);
$is_url=filter_var("edteam.com", FILTER_VALIDATE_URL, FILTER_FLAG_ALLOW_THOUSAND);
$is_url2=filter_var("https://jkanime.net/", FILTER_VALIDATE_URL, FILTER_FLAG_ALLOW_THOUSAND);
var_dump($is_url);
var_dump($is_url2);
$is_email=filter_var("juan@gmail", FILTER_VALIDATE_EMAIL, FILTER_FLAG_ALLOW_THOUSAND);
$is_email2=filter_var("juan@gmail.com", FILTER_VALIDATE_EMAIL, FILTER_FLAG_ALLOW_THOUSAND);
var_dump($is_email);
var_dump($is_email2);



?>
