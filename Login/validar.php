<?php

include('db.php');

$Nombres=$_POST['Nombres'];
$Contrasena=$_POST['Contrasena'];
session_start();
$_SESSION['Nombres']=$Nombres;

$consulta="SELECT*FROM usuarios where Nombres='$Nombres' and Contrasena='$Contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../Compras/index.php");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">DATOS INVALIDOS</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>