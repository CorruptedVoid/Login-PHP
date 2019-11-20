<?php 

include("conexion.php");


$usuario= $_REQUEST['usuario'];
$contrasena= $_REQUEST ['contraseña'];
$correo= $_REQUEST['correo'];
$telefono= $_REQUEST['telefono'];

$sql= "INSERT INTO usuarios(ID,Usuario,Contraseña,Correo,Telefono)VALUES ('0','$usuario','$contrasena','$correo','$telefono')";
  
  $con->query($sql);
  
       
?> 
          