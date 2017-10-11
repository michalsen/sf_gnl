<?php
/**
 *  SF/GNL App
 *  Version 2.0
 *  Oct 5/17
 */


session_start();


$api = [];


require 'vendor/autoload.php';
require '.config_dev';



use \Siler\Functional as F;
use \Siler\Route;
use \Siler\Twig;
use \Phpforce\SoapClient\Client;
use \GuzzleHttp\Exception\RequestException;
use \GuzzleHttp\Psr7\Request;



// GNL
$client = new GuzzleHttp\Client();
$response = $client->request('GET', $api['url'] . $api['lead'], [
  'headers' => [
    'X-ApiToken' => $api['key'],
    'Accept' => 'application/json',
    'Content-type' => 'application/json'
   ]]);

$result = json_decode($response->getBody()->getContents());

var_dump($result);


// SF
$client = $SFbuilder->build();

try {
  $fields = $client->describeSObjects(array('Lead'));
} catch (Exception $e) {
  print $e;
}

$var = $fields[0]->getFields()->toArray();

$sfFields = [];

foreach ($var as $key => $value) {
  $sfFields[] = $value->getName();
}


Twig\init('templates');

Route\get('/', F\puts(Twig\render('home.twig',
                array('title' => 'SF Fields',
                      'fields' => $sfFields)
              )
            )
          );













