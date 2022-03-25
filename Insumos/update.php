<?php

include("conexion.php");
$con=conectar();

$Id=$_POST['Id'];
$Nombre=$_POST['Nombre'];
$Cantidad=$_POST['Cantidad'];
$Precio=$_POST['Precio'];
$Total=$_POST['Total'];

$sql="UPDATE insumos SET  Nombre='$Nombre',Cantidad='$Cantidad',Precio='$Precio','$Total' WHERE Id='$Id'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("location:index.php");
    }else {
        echo"no hizo un culo";
    }
?>