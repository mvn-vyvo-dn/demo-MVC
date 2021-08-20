<?php
require_once('models/users.php');
require_once('/var/www/MVC/controllers/baseController.php');

class UsersController extends BaseController
{
    protected $folder;
    protected $user;

    function __construct()
    {
        $this->folder = 'users';
        $this->user = new User();
    }

    public function index()
    {
        $data = $this->user->all();
        //model
        $data = array('data' => $data);
        //view
        $this->render('index', $data);
    }

    public function showUser()
    {
        $user = $this->user->find($_GET['id']);
        $data = array('data' => $user);
        $this->render('show', $data);
    }

    public function showUrl()
    {
        $data = array('data' => $this->user->showUrl());
        $this->render('showUrl', $data);
    }
}
