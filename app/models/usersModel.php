<?php
include_once("../models/connectionModel.php");
include_once("../controllers/connectionController.php");
header('Content-Type: application/json');
//The user model contains all the logic and operational part required for the queries that have to do with the user table. 
//For testing purposes, this class only has the get method which was required but the corresponding methods for post, put and delete can be added.
class usersModel
{

  private $dbInstance;

  public function __construct($host, $dbname, $username, $password)
  {
    // $this->dbInstance = ConnectionModel::getInstance($host, $dbname, $username, $password);
    $this->dbInstance = new ConnectionController($host, $dbname, $username, $password);
  }
  //This function contains all the necessary logic to query the user table in the database. It returns a json with the users and in case of error, it is also displayed.
  public function getUsers()
  {
    try {
      $query = "SELECT * FROM public.users;"; //Query to execute in the DB.
      $stmt = $this->dbInstance->connectionModel->query($query);
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC); //get all the data from the query.

      // Set the response header to indicate JSON content
      http_response_code(200);
      return json_encode($users);
    } catch (Exception $error) {
      http_response_code(400);
      $message = (object) [
        'Message' => 'Some thing was wrong, please report the problem.',
        'Error' => $error
      ];
      return json_encode($message);
    }
  }
}
//We validate if you want to enter the route through the URL and not through the login, if so we redirect generating a kind of "block".
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  header("Location: ../views/");
  exit();
}
