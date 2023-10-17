<?php
include "../Auntenticacion.php";

$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];
$Correo=$_POST['correo'];
$Contraseña=$_POST['contraseña'];
$Nacimiento=$_POST['fecha'];

/*$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/

$sql = "INSERT INTO usuarios (Nombre,Apellido,Correo,Contraseña,Nacimiento) VALUES ('$Nombre', '$Apellido', '$Correo','$Contraseña','$Nacimiento')";

if ($conn->query($sql) === TRUE) {
  header ('Location:../tab2/registred.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>