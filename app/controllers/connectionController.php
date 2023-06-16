<?php
include_once("../app//models/connectionModel.php");

//This class enables communication between the view (client) and the model. In other words, this class will be responsible for creating the database connection and handling client requests related to it.
class ConnectionController
{
  private $connectionModel; 

  //This method allows creating the instance of the database.
  public function __construct($host, $dbname, $username, $password)
  {
    $this->connectionModel = ConnectionModel::getInstance($host, $dbname, $username, $password); 
  }

  public function getUsers()
  {
    $ans = ConnectionModel::getUsers();
    return $ans;
  }

}
