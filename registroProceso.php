<?php

include("conexion.php");
$usuario = $_POST["usuario"];
$contrasena = hash("whirlpool",$_POST["contrasena"]);
$email = $_POST["email"];

$statement = "INSERT INTO 
            usuarios(nombre,contrasena,email)
            VALUES ('$usuario','$contrasena','$email')";

$resultado = $conexionBD->query($statement);
if($resultado){
    echo"Si se insertó registro";
}
else{
    echo"Algo salio mal :(";
}

?>