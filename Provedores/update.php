<?php

include("conexion.php");
$con=conectar();

$Id=$_POST['Id'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Celular=$_POST['Celular'];
$Correo=$_POST['Correo'];
$Estado=$_POST['Estado'];


$sql="UPDATE provedores SET  Nombres='$Nombres',Apellidos='$Apellidos',Celular='$Celular',Correo='$Correo',Estado='$Estado' WHERE Id='$Id'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("location:index.php");
    }
?>