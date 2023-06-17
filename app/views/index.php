<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/styles.css">
  <title>Connecting PostgreSQL with PHP.</title>
</head>

<body>
  <?php
  // include_once("../controllers/connectionController.php");
  // Create an instance of the controller
  // $controller = new ConnectionController("localhost", "dbUsers", "root", " ");
  // $users = $controller->getUsers();
  // print_r($users);
  ?>
  <div class="container">
    <h2>Login</h2>
    <form action="../controllers/connectionController.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>

</body>

</html>