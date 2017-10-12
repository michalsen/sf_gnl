<?php


$host = 'localhost';
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$db = $_ENV['DB_NAME'];
R::setup("mysql:host=$host;dbname=$db", $user, $pass);


$api['url'] = $_ENV['GNL_URL'];
$api['key'] = $_ENV['GNL_KEY'];
$api['lead'] = 1409065;


$SFbuilder = new \Phpforce\SoapClient\ClientBuilder(
  __DIR__ . '/wsdl/enterprise.wsdl.xml',
  $_ENV['SF_USER'],
  $_ENV['SF_PASS'],
  $_ENV['SF_API']
);

$calendar = $_ENV['CAL_URL'];
