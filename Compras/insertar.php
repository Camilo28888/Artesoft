<?php
include("conexion.php");
$con=conectar();

$id_compra=$_POST['id_compra'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha'];



$sql="INSERT INTO compras VALUES('$id_compra','$descripcion','$precio','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
   echo ' ffffffffffffff';
}
?>