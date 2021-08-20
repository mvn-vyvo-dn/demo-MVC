<?php
require_once('/var/www/MVC/controllers/baseController.php');
require_once('/var/www/MVC/models/post.php');

class PostsController extends BaseController
{
    protected $folder;
    protected $post;
    function __construct()
    {
        $this->folder = 'posts';
        $this->post = new Post();
    }

    public function index()
    {
        // die('here');
        $posts = $this->post->all();
        //model
        $data = array('posts' => $posts);
        //view
        $this->render('index', $data);
    }

    public function showPost()
    {
        $post = $this->post->find($_GET['id']);
        $data = array('post' => $post);
        $this->render('show', $data);
    }
}
