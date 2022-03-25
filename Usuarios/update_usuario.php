<?php

include("conexion_usuario.php");
$con=conectar();

$id=$_POST['id'];
$Nombre=$_POST['Nombre'];
$Contrasena=$_POST['Contrasena'];
$Documento=$_POST['Documento'];


$sql="UPDATE usuarios SET  Nombre='$Nombre',Contrasena='$Contrasena',Documento='$Documento' WHERE id='$id'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("location:index.php");
    }
?>