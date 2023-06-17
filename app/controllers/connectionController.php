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

  public function getUsers()
  {
    $ans = ConnectionModel::getUsers();
    return $ans;
  }

}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validar el usuario y la contraseña
  if ($username == "1" && $password == "1") {
    // Crear una instancia del controlador de conexión
    $controller = new ConnectionController("localhost", "dbUsers", "root", " ");
    // Obtener la respuesta de la base de datos
    $users = $controller->getUsers();
    // Mostrar la respuesta de la base de datos
    echo ($users);
    // Finalizar el script
    exit();
  } else {
    // Datos de inicio de sesión incorrectos

  }
}else{  
  header("Location: ../views/index.php");
  exit();
}
