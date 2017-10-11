<?php


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
