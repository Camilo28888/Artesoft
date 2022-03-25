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

$sql="UPDATE clientes SET  Nombres='$Nombres',Apellidos='$Apellidos',Celular='$Celular',Correo='$Correo' ,Direccion='$Direccion' WHERE Documento='$Documento'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("location:index.php");
    }
?>