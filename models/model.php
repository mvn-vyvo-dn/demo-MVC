<?php
require_once('/var/www/MVC/connection.php');

class Model {
    public $connection;

    function __construct() {
        $this->connection = DB::getInstance();
    }
}
