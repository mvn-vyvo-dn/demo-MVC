<?php
require_once('/var/www/MVC/controllers/baseController.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $data = array(
      'title' => 'MVC PHP',
      'year' => 2021
    );
    $this->render('home', $data);
  }

  public function error()
  {
    $this->render('error');
  }
}