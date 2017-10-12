<?php
/**
 *  SF/GNL App
 *  Version 2.0
 *  Oct 5/17
 */

session_start();

require 'vendor/autoload.php';


$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

require_once 'config.php';

use \Siler\Functional as F;
use \Siler\Route;
use \Siler\Twig;
use \Phpforce\SoapClient\Client;
use \GuzzleHttp\Exception\RequestException;
use \GuzzleHttp\Psr7\Request;

$page = (isset($_SESSION['valid']) ? 'login.twig' : 'home.twig');

include 'src/class.gnl.php';
// include 'src/class.sf.php';

if (!isset($lead)) $lead = ['test 1', 'test 2'];

Twig\init('templates');

Route\get('/', F\puts(Twig\render($page,
                array(
                      'title' => 'gnl',
                      'fields' => $lead
                    )
                  )
                )
              );


/**
 *  Postback call
 */
// if (preg_match('/postback/', $_SERVER['REQUEST_URI'])) {
//   if (isset($_POST['lead_id'])) {
//     $lead = $_POST['lead_id'];
//   }
// }






















