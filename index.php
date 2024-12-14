<?php
$ch = curl_init();
$placa = $_GET["dataplaca"];
curl_setopt($ch, CURLOPT_URL, 'https://srienlinea.sri.gob.ec/movil-servicios/api/v1.0/matriculacion/valor/'.$placa);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host' => 'srienlinea.sri.gob.ec',
    'Cache-Control' => 'no-cache, no-store, must-revalidate',
    'Sec-Ch-Ua' => '"Chromium";v="121", "Not A(Brand";v="99"',
    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.6167.160 Safari/537.36',
    'Content-Type' => 'application/json; charset=utf-8',
    'Accept' => 'application/json, text/plain, */*',
    'Sec-Ch-Ua-Platform' => '"Windows"',
    'Accept-Language' => 'es-ES,es;q=0.9',
    'Connection' => 'close',
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
echo $response;

curl_close($ch);
