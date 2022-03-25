<?php

include("conexion.php");
$con=conectar();

$Documento=$_GET['Documento'];

$sql="DELETE FROM clientes  WHERE Id='$Id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("location:index.php");
    }
?>
