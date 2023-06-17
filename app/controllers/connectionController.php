<?php
include_once("../models/connectionModel.php");


//This class enables communication between the view (client) and the model. In other words, this class will be responsible for creating the database connection and handling client requests related to it.
class ConnectionController
{
  public $connectionModel;

  //This method allows creating the instance of the database.
  public function __construct($host, $dbname, $username, $password)
  {
    $this->connectionModel = ConnectionModel::getInstance($host, $dbname, $username, $password);
  }
}
//We validate if you want to enter the route through the URL and not through the login, if so we redirect generating a kind of "block".
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  header("Location: ../views/");
  exit();
}
