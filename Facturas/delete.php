<?php

include("conexion.php");
$con=conectar();

$Id=$_GET['Id_factura'];

$sql="DELETE FROM factura WHERE Id_factura='$Id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("location:index.php");
    }
?>
