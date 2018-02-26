
<?php
require 'vendor/autoload.php';


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;




        $token = 'my personnal access tokens from WS2 Laravel/Passport';
        $client = new Client();
        $body = $client->request('GET','http://S2.ip/api/object/' . $object_id, [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'bearer ' . $token, 
        ])->getBody();

    $contents = (string) $body;
    $data = json_decode($contents);
    dd($data); // to see what's inside $data
  