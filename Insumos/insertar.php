<?php
include("conexion.php");
$con=conectar();

$Id=$_POST['Id'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$Precio=$_POST['Precio'];
$Total=$Cantidad*$Precio;
$Total_f=0;



$sql="INSERT INTO insumos VALUES('$Id','$Nombre','$Cantidad','$Precio','$Total','$Total_f')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:index.php");
     
}
?>
