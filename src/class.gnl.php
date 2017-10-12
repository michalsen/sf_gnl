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
$lead = get_object_vars($result->data);

foreach ($lead as $key => $value) {
  // Sometimes $value is an object....sometimes not
  // print $key . "\n";
}
