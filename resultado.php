<?php
  include("conexion.php");
  $usuario= $_POST["usuario"];
  $password=hash("whirlpool", $_POST["password"]);

  $statement = "SELECT id,nombre
                FROM usuarios 
                WHERE contrasena = '$password' 
                AND nombre='$usuario'";

$resultado = $conexionBD->query($statement);
//var_dump($resultado); para ver si es el usuario

if($resultado->num_rows>0){
  session_start();
  $_SESSION["datosUsuario"] = mysqli_fetch_assoc($resultado);
  $_SESSION["usuario"]=$usuario;
  $datos = [
    "mensaje" => "<p class=\"text-success\">Bienvenid@ ".$usuario."</p>",
    "codigo" => "1"
  ];
  
}
else{
  $datos = [
    "mensaje" => "<p class=\"text-danger\">Usuario o contraseña incorrectos</p>",
    "codigo" => "0"
  ];
}

echo json_encode($datos);

?>
