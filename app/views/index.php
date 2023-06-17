<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="icon" href="../../public/assets/favicon.ico" type="image/x-icon">
  <title>Connecting PostgreSQL with PHP.</title>
</head>

<body>
  <!-- This view is the main screen of the application, it allows you to see the login form. Here all the "blocked" routes are redirected. -->
  <div class="container">
    <h2>Login</h2>
    <form action="./users.php" method="POST">
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