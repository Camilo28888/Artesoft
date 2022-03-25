<?php
include("conexion.php");
$con=conectar();

$Id=$_POST['Id_factura'];
$Fecha=$_POST['Fecha'];
$Valor=$_POST['Valor'];




$sql="INSERT INTO factura VALUES('$Id','$Fecha','$Valor')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
     
}else {
}
?>