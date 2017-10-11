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


include 'src/class.gnl.php';
//include 'src/class.sf.php';




Twig\init('templates');

Route\get('/', F\puts(Twig\render('home.twig',
                array(
                      //'title' => 'gnl',
                      //'fields' => $result
                      )
              )
            )
          );













