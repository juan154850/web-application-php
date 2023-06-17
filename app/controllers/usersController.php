<?php
include_once("../controllers/usersController.php");
include_once("../models/usersModel.php");
include_once("../controllers/connectionController.php");

//This class is intended to have only the query responsibilities for the users. It behaves as a bridge between the client and the model.
class userController {

  private $instance;
  public function __construct($host, $dbname, $username, $password){
    $this->instance = new usersModel($host, $dbname, $username, $password);
  }
  //This function allows you to take users from the database. 
  public function getUsers()
  {
    $ans = $this->instance->getUsers();
    return $ans;
  }

}
//We validate if you want to enter the route through the URL and not through the login, if so we redirect generating a kind of "block".
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  header("Location: ../views/");
  exit();
}
