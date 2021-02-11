<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://prod-s0-webapp-proxy.nubank.com.br/api/discovery");
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);

var_dum($ch);
