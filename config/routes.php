<?php
$routes = array(
  'modules' => array(
    'home' => array(
      'modulePath' => 'home/',
      'config' => array(),
      'pages' => array(
        'contactez-nous' => 'index.php',
      ),
    ),
  ),
  'pages' => array(
    '404' => '404.php'
  ),
);

require_once FILEROOT.'config/functions/routes.php';

Routes::$routes = $routes;