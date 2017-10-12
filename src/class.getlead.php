<?php

/**
 *  Get GNL Lead
 */
class GetLead {

  public $id = array();

  /**
   *  Create Object
   */
  public function __construct($leadId) {
    $lead = $this->callGnl($leadId);
    $lead_array = $this->parseXML($lead);
    $this->keys = $this->keyArray($lead);
    $this->id = $this->parseXML($lead);
  }

  /**
   *  Decode JSON to an Array
   */
  private function parseXML($lead) {
    return json_decode($lead, true);
  }

  /**
   *  Create Array of Keys
   */
  public function keyArray($keys) {
    $key_array = json_decode($keys, true);
    $keys = array();
    foreach ($key_array['data'] as $key => $value) {
      if (!is_array($value)) {
            $keys[] = $key;
        }
         else {
          foreach ($value as $subkey => $subvalue) {
              $keys[] = $subkey;
           }
        }
    }
    return $keys;
  }

  /**
   *  CURL call to GNL API for lead
   */
  public function callGnl($leadId)
  {
     // Guzzle
  }

}
