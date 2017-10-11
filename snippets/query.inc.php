<?php

$results = $client->query('SELECT ID,
                                  FirstName,
                                  LastName,
                                  Company,
                                  LeadSource,
                                  Lead_Date__c,
                                  SNLID__c,
                                  User__c FROM Lead LIMIT 1');

foreach ($results as $account) {
    print '<pre>';
    print_r($account);
    print "</pre>";
}
