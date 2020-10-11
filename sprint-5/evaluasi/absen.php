<?php

require "vendor/autoload.php";

$client = new GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
    'form_params' => [
    'email' => 'juangraharjo03@gmail.com',
    'password' => 'Juang666'
    ]
]);

$eva = json_decode($response->getBody(), true);
// echo $response->getBody();
$eva["token"];

$token = $eva['token'];
$response = $client->request('POST', 'https://api.pondokprogrammer.com/api/class/qr?class_id=85',[
    'headers'=>[
        'Authorization' => 'bearer' . $