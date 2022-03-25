<?php

include("conexion.php");
$con=conectar();

$Id=$_GET['Id'];

$sql="DELETE FROM proveedores  WHERE Id='$Id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("location:index.php");
    }
?>
