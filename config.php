<?php



$ENV = (preg_match('/Development Server/', $_SERVER['SERVER_SOFTWARE']) ? 'dev' : 'test');

if ($ENV == 'dev') {
  require '.config_dev';
}
 else {
  require '.config_test';
}
