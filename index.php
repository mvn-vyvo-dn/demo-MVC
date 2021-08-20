<?php
require_once('/var/www/MVC/connection.php');
//http://demo-mvc.example/index.php?controller=posts&action=index

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'pages';
  $action = 'home';
}

require_once('/var/www/MVC/routes.php');