<?php

include("conexion.php");
$con=conectar();

$id_compra=$_POST['id_compra'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha'];


$sql="UPDATE compras SET  descripcion='$descripcion',precio='$precio',fecha='$fecha' WHERE id_compra='$id_compra'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("location:index.php");
    }
?>