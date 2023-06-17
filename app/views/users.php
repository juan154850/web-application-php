<?php
// This view acts as the endpoint to fetch the users. It contains simple logic to validate the form credentials and simply calls the controller and asks for the users.
include_once("../controllers/usersController.php");

// Check if the form has been sent
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate user and password
  if ($username == "pruebas" && $password == "prueba123") {
    // Create an instance of the connection driver
    $ans = new userController("localhost", "dbUsers", "root", " ");
    // Obtain the response from the database
    $users = $ans->getUsers();
    echo ($users);
    return $users;
  } else {
    // Incorrect login data
    header('Content-Type: application/json');
    http_response_code(400);
    $message = (object) [
      'Message' => 'Invalid credentials.'
    ];
    $message = json_encode($message);
    echo $message;
    return $message;
  }
} else {
  // If we try to enter this path using the URL, it simply redirects us to the login.
  header("Location: ./index.php");
  exit();
}

// Important note: the POST method has been used only to control direct access to the path via the URL. But in an API creation environment, other validation methods are used for sensitive information such as authentication tokens, so you could use the GET method which is specifically for this type of query requests.
?>