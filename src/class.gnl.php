<?php

// GNL lead data
$client = new GuzzleHttp\Client();
$response = $client->request('GET', $api['url'] . $api['lead'], [
  'headers' => [
    'X-ApiToken' => $api['key'],
    'Accept' => 'application/json',
    'Content-type' => 'application/json'
   ]]);

$result = json_decode($response->getBody());
var_dump(get_object_vars($result->data));
