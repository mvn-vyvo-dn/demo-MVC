<?php

$controllers = array(
  'pages' => ['home', 'error'],
  'posts' => ['index', 'showPost'],
  'users' => ['index', 'showUser', 'showUrl']
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}
// die($controller);
require_once('/var/www/MVC/controllers/' . $controller . 'Controller.php');

$class = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
// die($action);
$controller = new $class();

$controller->$action();