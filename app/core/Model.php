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

    public function beginTransaction(){
      return $this->getConnection()->beginTransaction();
    }

    public function executeQueryOneRow($sql, $params = null){
      try {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
      } catch (PDOException $ex){
        if($this->debug){
          echo "<b>Error on executeQueryOneRow():</b>" .$ex->getMessage(). "</br>";
          echo "<b>SQL: </b>" .$sql. "</br>";

          echo "</br><b>Parameters: </b>";
          print_r($params) . "</br>";
        }
        die();
        return null;
      }
    }

    public function executeQuery($sql, $params = null){
      try {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $ex){
        if($this->debug){
          echo "<b>Error on executeQuery(): </b>" .$ex->getMessage(). "</br>";
          echo "<b>SQL: </b>" .$sql. "</br>";

          echo "</br><b>Parameters: </b>";
          print_r($params) . "</br>";
        }
        die();
        return null;
      }
    }

    public function executeNonQuery($sql, $params = null){
      try {
        $stmt = $this->getConnection()->prepare($sql);
        return $stmt->execute($params);
      } catch (PDOException $ex){
        if($this->debug){
          echo "<b>Error on executeNonQuery(): </b>" .$ex->getMessage(). "</br>";
          echo "<b>SQL: </b>" .$sql. "</br>";

          echo "</br><b>Parameters: </b>";
          print_r($params) . "</br>";
        }
        die();
        return false;
      }
    }

    public function numberRows($sql, $params = null){
      try {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);

        return $stmt->rowCount();

      } catch (PDOException $ex){
        if($this->debug){
          echo "<b>Error on numberRows(): </b>" .$ex->getMessage(). "</br>";
          echo "<b>SQL: </b>" .$sql. "</br>";

          echo "</br><b>Parameters: </b>";
        }
        die();
        return -1;
      }
    }

    public function getDebugState(){
      return $this->debug;
    }
}

?>