<?php

include("conexion.php");
$con=conectar();


$Id=$_POST['Id_factura'];
$Fecha=$_POST['Fecha'];
$Valor=$_POST['Valor'];




$sql="UPDATE factura SET  Fecha='$Fecha',Valor='$Valor' WHERE Id_factura='$Id'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("location:index.php");
    }
?>