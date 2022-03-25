<?php

include("conexion.php");
$con=conectar();

$id_compra=$_GET['id_compra'];

$sql="DELETE FROM compras WHERE id_compra='$id_compra'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
