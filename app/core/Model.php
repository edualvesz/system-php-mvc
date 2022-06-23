<?php 

namespace app\core;
use PDO;
use PDOException;

class Model
{
    private static $connection;
    private $debug;  
    private $server;  
    private $user;  
    private $password;  
    private $database;  

    public function __construct(){
      $this->debug = true;

      $this->server = DB_HOST;
      $this->user = DB_USER;
      $this->password = DB_PASS;
      $this->database = DB_NAME;
    }

    // Create a database connection or return the connection already open using singletion design pattern
    public function getConnection(){
      try {
        if(self::$connection == null) {
          self::$connection = new PDO("mysql:host{$this->server};dbname={$this->database};charset=utf8", $this->user, $this->password);
          self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          self::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          self::$connection->setAttribute(PDO::ATTR_PERSISTENT, true);
        }
        return self::$connection;
      } catch (\PDOException $ex){
        if ($this->debug){
          echo "<b>Error on getConnection(): </b>" . $ex->getMessage() . "</br>";
        }
        die();
      }
    }

    public function disconnect(){
      self::$connection = null;
    }

    public function getLastId(){
      return $this->getConnection()->lastInsertId();
    }
}

?>