<?php
include("conexion.php");
$con=conectar();

$Id=$_POST['Id'];
$Documento=$_POST['Documento'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Celular=$_POST['Celular'];
$Correo=$_POST['Correo'];
$Direccion=$_POST['Direccion'];


$sql="INSERT INTO clientes VALUES('$Documento','$Nombres','$Apellidos','$Celular','$Correo','$Direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:index.php");
     
}else {
}
?>