<?php
include("conexion_usuario.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Contrasena=$_POST['Contrasena'];
$Documento=$_POST['Documento'];



$sql="INSERT INTO usuarios VALUES('$id','$Nombre','$Contrasena','$Documento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
   echo ' ffffffffffffff';
}
?>