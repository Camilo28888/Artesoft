<?php
include("conexion.php");
$con=conectar();

$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Celular=$_POST['Celular'];
$Correo=$_POST['Correo'];
$Estado=1;



$sql="INSERT INTO provedores VALUES(Null,'$Nombres','$Apellidos','$Celular','$Correo','$Estado')";
$query= mysqli_query($con,$sql);


if($query){
    Header("Location: index.php");
     
}
?>