<?php
class DB
{
  private static $instance = NULl;
  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      try {
        $dbName = 'japan_vista_guide';
        $host = 'postgres';
        $port = 5432;
        $user = 'postgres';
        $pass = 'secret';
        $driver = 'pgsql';
        self::$instance = new PDO("$driver:host=$host;port=$port;dbname=$dbName", $user, $pass);
        self::$instance->exec("SET NAMES 'utf8'");
      } catch (PDOException $ex) {
        die($ex->getMessage());
      }
    }
    return self::$instance;
  }
}
?>