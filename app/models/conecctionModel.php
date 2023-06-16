<?php

//To create the table, you can use the next code or import the file "dataBase" in your postgreSQL. 
// CREATE TABLE public.users
// (
//     id serial NOT NULL,
//     name character varying NOT NULL,
//     last_name character varying NOT NULL,
//     email character varying NOT NULL,
//     age integer NOT NULL,
//     PRIMARY KEY (id)
// );

//the next class follows the Singleton pattern. 
class ConnectionModel {

  //Create the private attributes.
  private static $instance;
  private $conn;

  //initialize the class.
  private function __construct($host, $dbname, $username, $password){

    try {
      $this->conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
      echo "Successful connection.";
    } catch (PDOException $exp) {
      echo "Connection failed. " . $exp->getMessage();
    }
  }

  //method to instance the class.
  public static function getInstance($host, $dbname, $username, $password)
  {
    //if the instance does not exist, we create it.
    if (self::$instance === null) {
      self::$instance = new ConnectionModel($host, $dbname, $username, $password);
    }
    //else, we return the instance.
    return self::$instance->conn;
  }

}

?>