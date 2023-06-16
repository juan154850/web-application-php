<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connecting PostgreSQL with PHP.</title>
</head>

<body>
  <?php
  include_once("../app/controllers/connectionController.php");
  // Create an instance of the controller
  $controller = new ConnectionController("localhost", "dbUsers", "root", " ");
  $users = $controller->getUsers();
  print_r($users);
  ?>

</body>

</html>