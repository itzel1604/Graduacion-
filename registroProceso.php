<?php

include("conexion.php");
$usuario = $_POST["usuarior"];
$contrasena = hash("whirlpool",$_POST["contrasena"]);
$email = $_POST["email"];

$statement = "INSERT INTO 
            usuarios(usuarior,contrasena,email)
            VALUES ('$usuario','$contrasena','$email')";

$resultado = $conexionBD->query($statement);
if($resultado){
    echo"Si se insertó registro";
    session_start();
}
else{
    echo"Algo salio mal :(";
}

?>